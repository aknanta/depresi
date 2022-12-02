<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(){
        return view('login');
    }

    public function actionLogin(Request $request){
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];
        if(Auth::attempt($data)){
            return redirect('admin');
        }else{
            $request->session()->flash('error', 'Username atau password salah');
            return redirect('login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
