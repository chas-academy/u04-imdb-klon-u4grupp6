<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collections = Collection::all();
        return view("collections.index", ["collections" => $collections]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("collections.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $collection = Collection::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        $collection->movies()->attatch($request->movie_ids);

        return redirect()->route('collections.index')->with('success','Collection created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $collection = Collection::findOrFail( $id );
        return view('collections.view', ['collection' => $collection]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $collection = Collection::findOrFail( $id );
        return view('collections.edit', ['collection'=> $collection]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $collection = Collection::findOrFail( $id );

        $collection->title = $request->title;
        $collection->description = $request->description;

        $collection->movies()->sync($request->movie_ids);

        return redirect()->route('collections.index')->with('success','Collection updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $collection = Collection::findOrFail( $id );

        $collection->delete();

        return redirect()->route('collections.index')->with('success','Collection deleted successfully');
    }
}
