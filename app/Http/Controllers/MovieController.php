<?php

namespace App\Http\Controllers;

use App\Models\Movie;


use Illuminate\Http\Request;

class MovieController extends Controller
{
    // public 
    function index()
    {
        $movies = Movie::all();
        return view('movies.index', ['movies' => $movies]);
    }

    function show($id)
    {
        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }
}
