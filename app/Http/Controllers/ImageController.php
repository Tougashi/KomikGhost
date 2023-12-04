<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Images;
use App\Models\Chapters;
use App\Models\Komiks;
use Carbon\Carbon;
use PhpParser\Node\NullableType;

class ImageController extends Controller
{
    public function index(): View
    {
        $chapters = Chapters::all();
    
        return view('Admin.Image.index', [
            'title' => "Upload Image",
            'komik' => Komiks::all(),
            'chapters' => $chapters,
            'image' => Images::all()
        ]);
    
    }

    public function store(Request $request): RedirectResponse
    {

        $image = array();
  
        $request->validate([
            'image.*' => 'required|file|mimes:jpeg,jpg,png,gif,svg|max:10240',
            'chapter_id' => 'required|exists:chapters,id',
          
        ]);

        foreach ($request->file('image') as $value) {
            $originalName = $value->getClientOriginalName();
            $imageName = time() . '_' . $originalName;
            $path = 'komik/' . $imageName;
            $value->storeAs('/komik', $imageName);
        
            Images::create([
                'image' => $path,
                'chapter_id' => $request->chapter_id,
            ]);
        }
        return redirect()->back()->withSuccess('Telah Berhasil Mengunggah Gambar.');
    }
   
}
