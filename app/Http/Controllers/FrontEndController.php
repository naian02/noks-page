<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function frontend()
    {
        return view('layouts.frontend.frontend');
    }
    public function home()
    {
        return view('layouts.frontend.home.index');
    }
}
