<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RegisterFormRequest;
use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(RegisterFormRequest $request){

        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=>Hash::make($request->password)
        ]);

        return redirect('/login')->with('success','Data Berhasil Dibuat');
    }
}
