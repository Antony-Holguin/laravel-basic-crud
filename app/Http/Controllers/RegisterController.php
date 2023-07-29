<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth/register');
    }

    public function store(Request $request)
    {   
        //dd($request);
        $this->validate($request,[
            'name' => 'required|max:30',
            'lastname' => 'required|max:50|min:3',
            'username' => 'required|unique:users|max:60',
            'email' => 'required|email|unique:users|max:60',
            'password' => 'required|confirmed|min:6'

        ]);

        User::create([
            
            'name' => $request->name,
            'email' => $request->email,
            'lastname' => $request->lastname,
            'username' => Str::slug( $request->username),
            'password' => Hash::make($request->password)
        ]);

        
    }
}
