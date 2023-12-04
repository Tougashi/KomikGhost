<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Komiks;
use App\Models\Images;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Crypt;


class MainController extends Controller
{
    public function index(Request $request)
    {

        $komik = Komiks::firstWhere('judul' , request('komik'));
        
        // GET DC & VERTIGO
        $DC = Category::where('nama', 'DC')->first();
        $Detective = Komiks::where('category_id', $DC->id)->get();
        
        $Vertigo = Category::where('nama', 'Vertigo')->first();
        $Verti = Komiks::where('category_id', $Vertigo->id)->get();

 
        // GET MARVEL & X-MEN
        $marvel = Category::where('nama', 'marvel')->first();
        $MC = Komiks::where('category_id', $marvel->id)->get();

        $xmen = Category::where('nama', 'X-Men')->first();
        $Xmen= Komiks::where('category_id', $xmen->id)->get(); 

        // GET IMAGE COVER
        $images = Images::where('chapter_id',)->get();
        $coverImage = $images->first();
        
       
        return view('Core.index', [
            'title' => "Beranda",
            'komik' => Komiks::latest()->get()->take(4),
            'DC' => $DC,
            'Vertigo' => $Vertigo,
            'Detective' => $Detective,
            'Verti' => $Verti,
            'MC' => $MC,
            'Xmen' => $Xmen
        ]);
    }

    public function search(Request $request)
    { 
        $search = $request->input('search');
    
        $komik = Komiks::where(function ($searchBuilder) use ($search) {
            $searchBuilder->where('judul', 'LIKE', "%$search%")
                ->orWhere('subjudul', 'LIKE', "%$search%");
        })->get();
        $category = Category::where(function ($searchBuilder) use ($search) {
            $searchBuilder->where('nama', 'LIKE', "%$search%")
                ->orWhere('slug', 'LIKE', "%$search%");
        })->get();
        
        return view('Core.search', [
            'komik' => $komik,
            'category' => $category,
            'search' => $search,
            'title' => "Search"
        ]);
    }  
    
    public function terbaru()
    {
        $categories = Category::get();
        $latestComics = Komiks::whereIn('category_id', $categories->pluck('id'))
        ->latest('created_at') // Mengurutkan berdasarkan kolom created_at secara descending (terbaru)
        ->get();

        return view('Core.Terbaru.index', [
            'latestComics' => $latestComics,
            'title' => "Terbaru"
        ]);
    }
   
    public function showMarvelComics()
    {
        $marvelCategory = Category::where('nama', 'marvel')->first();
        $xmenCategory = Category::where('nama', 'X-Men')->first();
    
        if (!$marvelCategory || !$xmenCategory) {
            abort(404); // Salah satu atau kedua kategori tidak ditemukan
        }
    
        $MarvelXmen = Komiks::where('category_id', $marvelCategory->id)
            ->orWhere('category_id', $xmenCategory->id)
            ->get();
    
        return view('Core.Marvel.index', [
            'MarvelXmen' => $MarvelXmen,
            'marvelCategory' => $marvelCategory,
            'xmenCategory' => $xmenCategory,
            'title' => "Marvel"
        ]);
    }

    public function showDCComics()
    {
        $DC = Category::where('nama', 'DC')->first();
        $Vertigo = Category::where('nama', 'Vertigo')->first();
    
        if (!$DC || !$Vertigo) {
            abort(404); // Salah satu atau kedua kategori tidak ditemukan
        }
    
        $DCVertigo = Komiks::where('category_id', $DC->id)
            ->orWhere('category_id', $Vertigo->id)
            ->get();

        return view('Core.DC.index', [
            'DCVertigo' => $DCVertigo,
            'DC' => $DC,
            'Vertigo' => $Vertigo,
            'title' => "DC"
        ]);
    }

    public function bookmark()
    {
        $komik = Komiks::firstWhere('judul' , request('komik'));
        return view ('Core.Bookmark.index', [
            'title' => "Bookmark",
            'komik' => Komiks::latest()->get()->take(4),
        ]);
    }
    
    public function contact()
    {
        return view('Core.Contact.index', [
            'title' => "Hubungi"
        ]);
    }
    
    public function faq()
    {
        return view('Core.Faq.index', [
            'title' => "FAQ"
        ]);
    
    }

    public function profile()
    {
        return view('Profile.index', [
            'title' => "Profil",    
           
        ]);
    }
    
}
