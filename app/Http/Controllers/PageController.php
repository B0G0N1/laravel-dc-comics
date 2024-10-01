<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $comics = config('db');
        return view('home', compact('comics'));
    }
}
