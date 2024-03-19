<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request){
        $datosVerificados = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'birthday' => 'required',
        ]);


        if(User::create($datosVerificados)) {
            return redirect('/');
         }

         return back()->withErrors([
          'email'=> 'correo incorrecto',
          'password'=>'No es tu contraseña'
         ]);

    }



    public function login(Request $request) {
     $credentials= $request->validate([
        'email' => 'email|required',
        'password' => 'required'
     ]);

     if(Auth::attempt($credentials)){
         return redirect('/');
     }
    }
}
