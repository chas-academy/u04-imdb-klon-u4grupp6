<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return view("review.index", ['reviews' => $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movie = Movie::findOrFail( $request->movie_id );
        $user = User::findOrFail( $request->user_id );
        $review = new Review([
            'title' => $request->title,
            'content' => $request->content]);

        $movie->reviews()->save($review);
        $user->reviews()->save($review);

        return redirect()->route('review.index')->with('success', 'Review created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = Review::findOrFail( $id );
        return view('review.show', ['movie' => $review]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $review = Review::findOrFail( $id );
        return view('review.edit', ['review'=> $review]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $review = Review::findOrFail( $id );

        $review->title = $request->title;
        $review->content = $request->content;

        $review->save();

        return redirect()->route('review.index')->with('success','Review updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::findOrFail( $id );
        $review->delete();
        return redirect()->route('review.index')->with('success','Review deleted successfully');
    }
}
