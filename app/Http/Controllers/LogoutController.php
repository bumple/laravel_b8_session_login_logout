<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $request->session()->remove('login');
//        $request->session()->push('login', true);
        return redirect()->route('show.login');


    }
}
