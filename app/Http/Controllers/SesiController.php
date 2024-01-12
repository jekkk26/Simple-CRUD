<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin')->with('success', 'Anda Berhasil Login');
            } elseif ($user->role == 'staf') {
                return redirect()->route('barangjenisbarang.index')->with('Welcome', 'Selamat Datang ' . $user->name);
            }
        }

        return redirect()->route('login')->withErrors('Username dan Password Tidak sesuai')->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda Berhasil Logout');
    }

    public function homepage()
    {
        return view('homepage');
    }
}
