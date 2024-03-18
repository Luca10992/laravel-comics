<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('layout.app');
    }
    public function library() {
        $comics = config('comics');
        return view('comicsPage', compact('comics'));
    }

    public function desc($index) {
        $comics = config('comics');
        if (!array_key_exists($index, $comics)) {
        abort(404);
    }
        return view('comicsDesc', compact('comics', 'index'));
    }
}