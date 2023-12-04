<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('role')->get(); // Mengambil pengguna dengan relasi peran (role)

        return view('Admin.Users.index', [
        'title' => "List Pengguna",
        'users' => $users // Menggunakan 'users' bukan 'user'
         ]);
    }

    public function destroy(string $id)
    {
        $user = User::find( decrypt($id) );
        User::destroy(decrypt($id));
        return redirect()->back()->withToastSuccess('Telah Berhasil dihapus');
    }
}
