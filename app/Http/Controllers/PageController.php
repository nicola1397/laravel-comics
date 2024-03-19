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

    public function details($key)
    {
        $comics = config('comics');
        if (!array_key_exists($key, $comics)) {
            abort(404);
        } else {
            $comic = $comics[$key];
        }
        return view('details', compact('comic'));
    }
}