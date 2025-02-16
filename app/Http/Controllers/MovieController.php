<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $movies = Movie::all();
        if ($request->user()) {
            $user = $request->user();
        } else {
            return view('movie.index', ['movies'=> $movies]);
        }
        if ($user->is_admin) {
            return view("admin.dashboard", ['movies' => $movies]); //REMEMBER TO MOVE THE DASHBOARD VIEW TO THIS PATH!
        } else {
            return view('movie.index', ['movies'=> $movies]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'genre' => 'required|string',
            'release_date' => 'required|date'
        ]);

        Movie::create([
            'title'=> $request->title,
            'description' => $request->description,
            'genre' => $request->genre,
            'release_date' => $request->release_date
        ]);

        return redirect()->route('dashboard')->with('success','Movie added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.edit', ['movie'=> $movie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movie::findOrFail($id);

        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->genre = $request->genre;
        $movie->release_date = $request->release_date;

        $movie->save();

        return redirect()->route('dashboard')->with('success','Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect()->route('dashboard')->with('success','Movie deleted successfully');
    }
}
