<?php

namespace App\Http\Controllers;
use App\Models\Komiks;
use App\Models\Category;
use App\Models\Chapters;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KomikController extends Controller
{
    
    public function baca($subjudul, $chapterId)
    {
        $komik = Komiks::where('subjudul',$subjudul)->first();
    
        $chapter = Chapters::where('judul_ch', $chapterId)->first();
     
        $image = Chapters::where('judul_ch', $chapterId)
                ->where('komik_id', $komik->id)
                ->first();

        $images = Images::where('chapter_id', $image->id)->get();

        
        return view('Core.Baca.index', [
            'title' => "Baca",
            'chapter' => Chapters::all(),
            'komik' => Komiks::all(),
            'images' => $images,
            
        ]);
    }

    public function list()
    {
        return view('Admin.Komik.index', [
            'title' => "Komik List",
            "komik" => Komiks::all()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function komik()
    {
        return view('Admin.Komik.add', [ 
            'title' => "Komik Upload",
            'category' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'subjudul' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'jumlah_ch' => 'required|integer|min:1',
            'created_at' => 'required|date',
            'cover' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:10240',
        ]);

        // if ($request->fails()) {
        //     return back()->with('errors', $request->messages()->all()[0])->withInput();
        // }

        $coverImageName = time() . '_' . $request->file('cover')->getClientOriginalName();
        $request->file('cover')->storeAs('/covers', $coverImageName);

        Komiks::create([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'deskripsi' => $request->deskripsi,
            'category_id' => $request->category_id,
            'jumlah_ch' => $request->jumlah_ch,
            'created_at' => $request->created_at,
            'cover' => 'covers/' . $coverImageName, // Simpan path gambar cover di kolom cover_image
        ]);

        return redirect()->back()->withToastSuccess('Telah berhasil dibuat');;
    }


    public function edit($id) 
    {
        $komik = Komiks::find( decrypt($id) );
        $categories = Category::all();   
        return view('Admin.Komik.edit', [
            'title' => "Edit Komik",
            'komik' => $komik,
            'categories' => $categories
        ]);
    }
    public function update(Request $request, $id) 
    {
        $komik = Komiks::find( decrypt($id) );
        $request->validate([
            'judul' => 'required|string|max:255',
            'subjudul' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'jumlah_ch' => 'required|integer|min:1',
            'created_at' => 'required|date',
            'cover' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:10240', // Ubah required menjadi nullable
        ]);
    
        if ($komik->cover) {
            Storage::delete('' . $komik->cover); // Hapus file cover lama
        }
    
        if ($request->hasFile('cover')) {
            // Simpan file cover yang baru
            $coverImageName = time() . '_' . $request->file('cover')->getClientOriginalName();
            $request->file('cover')->storeAs('covers', $coverImageName);
            $coverPath = 'covers/' . $coverImageName;
        } else {
            $coverPath = $komik->cover;
        }
    
        $komik->update([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'deskripsi' => $request->deskripsi,
            'category_id' => $request->category_id,
            'jumlah_ch' => $request->jumlah_ch,
            'created_at' => $request->created_at,
            'cover' => $coverPath, // Simpan path gambar cover di kolom cover_image
        ]);
    
        return redirect()->back()->withToastSuccess('Telah berhasil diupdate');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        $komik = Komiks::find( decrypt($id) );
        if($komik->cover) {
        Storage::delete('' . $komik->cover);
        }

        // Loop melalui semua chapter terkait
        foreach ($komik->chapters as $chapter) {
        // Ambil semua gambar terkait dengan chapter
        $images = $chapter->images;

        foreach ($images as $image) {
            Storage::delete($image->image); // Anggaplah path gambar disimpan di kolom 'image' pada tabel Images
            $image->delete();
        }

        $chapter->delete();
        }

        Komiks::destroy(decrypt($id));

        return redirect()->back()->withToastSuccess('Telah Berhasil dihapus');
    }
}
 