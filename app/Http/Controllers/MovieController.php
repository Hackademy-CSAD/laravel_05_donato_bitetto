<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('welcome', ["movies" => $movies]);
    }

    public function store(Request $request)
    {
        Movie::create([
            "title" => $request->title,
            "description" => $request->description,
            "year" => $request->year,
            "img" => $request->img,
        ]);

        return redirect(route('movie.index'))->with('success', 'Film inserito con successo!');
    }
}
