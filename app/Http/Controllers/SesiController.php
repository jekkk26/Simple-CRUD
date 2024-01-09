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
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect('admin/admin');
            } elseif (Auth::user()->role == 'staf') {
                return redirect()->route('barangjenisbarang.index');
            }
        } else {
            return redirect('')->withErrors('Username dan Password Yang Dimasukan Tidak Sesuai')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
