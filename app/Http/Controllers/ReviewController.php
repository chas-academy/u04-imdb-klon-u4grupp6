<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use App\Http\Requests\ReviewRequest;
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
        $movie = Movie::findOrFail($request->movie_id);
        $review = new Review([
            'title' => $request->title,
            'content' => $request->content]);

        $movie->reviews()->save($review);
        $review->user()->associate($request->user());

        return redirect()->route('review.index')->with('success', 'Review created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = Review::findOrFail( $id );
        $movie = $review->movie();
        $author = $review->user()->name;
        return view('review.show', ['review' => $review, 'movie' => $movie, 'author' => $author]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReviewRequest $request, string $id)
    {
        $review = Review::findOrFail( $id );
        $movie = $review->movie();
        $author = $review->user()->name;
        return view('review.show', ['review' => $review, 'movie' => $movie, 'author' => $author]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReviewRequest $request, string $id)
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
    public function destroy(ReviewRequest $request, string $id)
    {
        $review = Review::findOrFail( $id );
        $review->delete();
        return redirect()->route('review.index')->with('success','Review deleted successfully');
    }
}
