<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return redirect()->route('comics');
    }
    public function comics()
    {
        $comics = config('comics.data');
        return view('comics.index', compact('comics'));
    }
    public function comic($id)
    {
        $comics = config('comics.data');
        if (is_numeric($id) && $id < count($comics) && $id >= 0) {
            $comic = $comics[$id];
            return view('comics.show', compact('comic'));
        } else {
            abort(404);
        }
    }
    public function characters()
    {
        return view('characters');
    }
    public function movies()
    {
        return view('movies');
    }
    public function tv()
    {
        return view('tv');
    }
    public function games()
    {
        return view('games');
    }
    public function collectibles()
    {
        return view('collectibles');
    }
    public function video()
    {
        return view('video');
    }
    public function fans()
    {
        return view('fans');
    }
    public function news()
    {
        return view('news');
    }
    public function shop()
    {
        return view('shop');
    }
}
