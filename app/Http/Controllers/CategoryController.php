<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Komiks;
use App\Models\Chapters;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Category.index', [
            'title' => "Kategori List",
            'category' => Category::all(),
            'komik' => Komiks::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'created_at' => 'required|date',
        ]);

        $category = Category::create([
            'nama' => $request->nama,
            'slug' => $request->slug,
            'created_at' => $request->created_at,
        ]);

        return redirect()->back()->withToastSuccess('Telah berhasil diupload.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find( decrypt($id) );

        return view('Admin.Category.edit', compact('category'), [
            'title' => "Edit Kategory"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::find(decrypt($id));
    
        $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'required',
            'created_at' => 'required|date',
        ]);
    
        $category->update([
            'nama' => $request->nama,
            'slug' => $request->slug,
            'created_at' => $request->created_at,
        ]);
    
        return redirect()->back()->withToastSuccess('Telah berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $category = Category::find(decrypt($id));
        $category->delete();

        return redirect()->back()->withToastSuccess('Telah berhasil dihapus.');
    }
}
