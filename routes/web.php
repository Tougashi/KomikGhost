<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\KomikController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// MIDDLEWARE GUEST
Route::group(['middleware' => ['guest']], function () {
    // The same routes can be added here for guest users
    Route::get('/login',[LoginController::class, 'login'])->name('login');
    Route::post('/login',[LoginController::class, 'loginPost'])->name('login');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'registerPost'])->name('register');

    Route::controller(MainController::class)->group(function(){
        Route::get('/', 'index')->name('beranda');
        Route::get('/Beranda', 'index')->name('beranda');
        Route::get('/Contact', 'contact')->name('Contact');
        Route::get('/Faq', 'faq')->name('FAQ');
        Route::get('/Terbaru', 'terbaru')->name('Terbaru');
        Route::get('/Marvel', 'showMarvelComics')->name('Marvel');
        Route::get('/Dc', 'showDCComics')->name('DC');
        Route::get('/Search', 'search')->name('search');
    });

    Route::controller(KomikController::class)->group(function(){
        Route::get('/Baca/{komik:subjudul}/{chapters:judul_ch}', 'baca')->name('baca');
    });

    Route::controller(ChapterController::class)->group(function(){
        Route::get('Chapter/{komik:subjudul}', 'chapter')->name('chapter');
    });
});

    // MIDDLEWARE USERS
Route::group(['middleware' => ['auth']], function () {
    Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::controller(MainController::class)->group(function(){
        Route::get('/beranda', 'index')->name('beranda');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/faq', 'faq')->name('faq');
        Route::get('/terbaru', 'terbaru')->name('terbaru');
        Route::get('/marvel', 'showMarvelComics')->name('marvel');
        Route::get('/dc', 'showDCComics')->name('dc');
        Route::get('/search', 'search')->name('search');
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/bookmark', 'bookmark')->name('bookmark');
        Route::get('/bookmark/{komik}', 'add')->name('bookmark.add');

    });

    Route::controller(KomikController::class)->group(function(){
        Route::get('/baca/{komik:subjudul}/{chapters:judul_ch}', 'baca')->name('baca');
    });

    Route::controller(ChapterController::class)->group(function(){
        Route::get('chapter/{komik:subjudul}', 'chapter')->name('chapter');
    });

    // MIDDLEWARE ADMIN
    Route::group(['middleware' => ['auth', 'checkrole:1']], function () {

        
        Route::controller(ImageController::class)->group(function(){
            Route::get('image-upload', 'index')->name('image-upload');
            Route::post('image-upload', 'store')->name('image.store');
        });

        Route::controller(KomikController::class)->group(function(){
            Route::get('/komik-list', 'List')->name('List');
            Route::get('komik-upload', 'komik')->name('komik-upload');
            Route::post('komik-upload', 'store')->name('komik.store');
            Route::get('/komik/{komik}/edit', 'edit')->name('komik.edit');
            Route::put('/komik/{komik}', 'update')->name('komik.update');
            Route::get('/komik/{komik}', 'destroy')->name('komik.destroy');
        });

        Route::controller(ChapterController::class)->group(function(){
            Route::get('/chapter-list', 'index')->name('List');
            Route::get('chapter-upload', 'create')->name('chapter-upload');
            Route::post('chapter-upload', 'store')->name('chapter.store');
            Route::get('/chapter/{chapter}/edit', 'edit')->name('chapter.edit');
            Route::put('/chapter/{chapter}', 'update')->name('chapter.update');
            Route::get('/chapter/destroy/{id}', 'destroy')->name('chapter.destroy');
        });

        Route::controller(CategoryController::class)->group(function(){
            Route::get('category-upload', 'create')->name('category-upload');
            Route::post('category-upload', 'store')->name('category.store');
            Route::get('/category/{category}/edit', 'edit')->name('category.edit');
            Route::put('/category/{category}', 'update')->name('category.update');
            Route::delete('/category/{category}', 'destroy')->name('category.destroy');
        });

        Route::controller(UsersController::class)->group(function(){
            Route::get('users-list', 'index')->name('users-list');
            Route::post('users-upload', 'store')->name('users.store');
            Route::get('/users/{users}/edit', 'edit')->name('users.edit');
            Route::put('/users/{users}', 'update')->name('users.update');
            Route::get('/users/{user}', 'destroy')->name('users.destroy');
        });
    });
});

    

