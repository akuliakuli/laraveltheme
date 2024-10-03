<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        return view('themes.' . session('theme', 'classic') . '.contacts');
    }
}