<?php

namespace App\Http\Controllers;
use App\Models\Chapters;
use App\Models\Komiks;
use Illuminate\Http\Request;
use App\Models\Images;
use Illuminate\Support\Facades\Storage;

class ChapterController extends Controller
{

    public function chapter($subjudul)
    {
            
        $komik = Komiks::where('subjudul', $subjudul)->first();

        return view('Core.Chapter.index', compact('komik'), [
            'title' => "Chapter",
            'komik' => Komiks::all(),
            'komik' => $komik,
            'chapter' => Chapters::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Chapter.index', [
            'title' => "Chapter List",
            'chapter' => Chapters::all(),
            'komik' => Komiks::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $komik = Komiks::pluck('judul');
        return view('Admin.Chapter.add', [
            'title' => "Chapter Upload",
            'chapter' => Chapters::all(),
            'komik' => Komiks::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_ch' => 'required|string|max:255',
            'total_page' => 'required|integer|min:1',
            'komik_id' => 'required|exists:komiks,id',
        ]);

        $chapter = Chapters::create([
            'judul_ch' => $request->judul_ch,
            'total_page' => $request->total_page,
            'komik_id' => $request->komik_id,
        ]);

        return redirect()->back()->withToastSuccess('Telah berhasil diupload.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $chapter = Chapters::find(decrypt($id));
        $komik = Komiks::all();
        return view('Admin.Chapter.edit', compact('chapter', 'komik'), [
            'title' => "Edit Chapter",
            // 'chapter' => Chapters::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $chapter = Chapters::find(decrypt($id));
        $request->validate([
            'judul_ch' => 'required|string|max:255',
            'total_page' => 'required|integer|min:1',
            'komik_id' => 'required|exists:komiks,id',
        ]);

        $chapter->update([
            'judul_ch' => $request->judul_ch,
            'total_page' => $request->total_page,
            'komik_id' => $request->komik_id,
        ]);

        return redirect()->back()->withToastSuccess('Telah berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Images $image, $id)
    {
        $chapter = Chapters::find(decrypt($id));
   
        // Ambil semua gambar terkait dengan chapter
        $images = $chapter->images;
 
        // Hapus setiap gambar dari storage dan tabel Images
        foreach ($images as $image) {
        Storage::delete($image->image); // Anggaplah path gambar disimpan di kolom 'image' pada tabel Images
        $image->delete();
        }
        
        Chapters::destroy(decrypt($id));

        return redirect()->back()->withToastSuccess('Telah berhasil dihapus.');
    }
}
