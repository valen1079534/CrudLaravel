<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function index(){
        return view('auth.registro');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required | max:50',
            'email' => 'required | unique:users|max:30',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => Str::slug($request->email),
            'password' => Hash::make($request->password)
        ]);
     /*   dd("hoa"); */
     auth()->attempt($request->only('email','password'));
       return redirect()->route('loginIndex');
    }
}
