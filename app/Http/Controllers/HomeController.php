<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('themes.' . session('theme', 'classic') . '.home');
    }

    public function setTheme(Request $request)
    {
        Session::put('theme', $request->input('theme'));
        return redirect()->back();
    }
}
