<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRequest;

class PenggunaController extends Controller
{
    public function index() {
        if($pengguna = Auth::user()) {
            // switch ($user->level) {
            //     case '1':
            //     return redirect()->intended('/home');
            //     break;
            //     case '2':
            //     return redirect()->intended('/home');
            //     break;
            // }
            return redirect()->intended('home');
        }
        return view('auth.login');
    }

    // public function cekLogin(AuthRequest $request) {
    //     // return $request;
    //     $credential = $request->only('username','password');
        
    //     $request->session()->regenerate();
    //    if (Auth::attempt($credential)) {
    //     $pengguna = Auth::user();
    //     // switch ($user->level) {
    //     //     case '1':
    //     //         return redirect()->intended('home');
    //     //         break;
    //     //         case '2':
    //     //         return redirect()->intended('home');
    //     //         break;
    //     // }
    //     if ($pengguna) {
    //         return redirect()->intended('home');
    //     }

    // };

    // return back()->withErrors([
    //     'nofound' => 'Username or Password is wrong'
    // ])->onlyInput('username');

    // }

    public function logout(request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
