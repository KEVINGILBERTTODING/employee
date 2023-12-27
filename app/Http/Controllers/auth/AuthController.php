<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8'
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'email' => ':attribute tidak valid!',
            'exists' => ':attribute belum terdaftar!',
            'string' => ':attribute hanya boleh berupa huruf dan angka!',
            'min' => ':attribute tidak boleh kurang dari 8 karakter!'
        ], [
            'email' => 'Email',
            'password' => 'Kata sandi'
        ]);

        if ($validator->fails()) {
            return redirect()->route('/')->with('failed', $validator->errors()->first());
        }

        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return 'berhasil';
        }

        return redirect()->route('/')->with('failed', 'Kata sandi salah!');
    }

    function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        return redirect()->route('/');
    }
}
