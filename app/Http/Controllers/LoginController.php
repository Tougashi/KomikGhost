<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.index', [
            'title' => 'Login'
        ]);
         
    }
    
    public function loginPost(Request $request): RedirectResponse
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect('beranda')->with('toast', ['type' => 'success', 'message' => 'Login berhasil']);
        }

        return back()->with('toast', ['type' => 'error', 'message' => 'Username atau Password salah']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');
    }


    public function register()
    {
        return view('auth/register', [
        ]);
    }

    public function registerPost(Request $request)
    {
    $request->validate([
        'username' => 'required|max:255',
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:8|max:255'
    ]);

    $user = new User();
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->role_id = 2; // Set role_id to 2 for regular users
    $user->save();
    
    return back()->with('success', 'Register Berhasil');
    }



}
