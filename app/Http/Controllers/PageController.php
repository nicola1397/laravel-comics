<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function comics()
    {
        $comics = config('comics');

        return view('comics', compact('comics'));
    }
}