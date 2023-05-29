<?php

namespace App\Http\Controllers\Guests;
use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function comics()
    {
        $comics = Comic::all();
        return view('home', compact('comics'));
    }

    public function comic(Comic $comic)
    {
        return view('single_comic', compact('comic'));
    }
}
