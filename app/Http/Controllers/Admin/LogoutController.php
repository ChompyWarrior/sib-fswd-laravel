<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request) 
    {
        Session::flush();
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return redirect('/login');
    }
}
