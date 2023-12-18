<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();



        return view('albums.index', ['albums' => $albums]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlbumRequest $request)
    {
         $data = $request->validate([
            'name' => 'required|string|max:100',
            'year' => 'string|max:4',
            'times_sold' => 'int|max:500000'
        ]);

        Album:: create($data);

        return redirect()->route('albums.index')->with('Succes','Your album has been properly saved.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $album = Album::find($id);

        return view('albums.show', ['album' => $album]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $album = Album::find($id);

        return view('albums.edit', ['album' => $album]);
    }

    public function update(Request $request, $album)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'year' => 'string|max:4',
            'times_sold' => 'int|max:500000'
        ]);

        Album::findOrFail($album)->update($validatedData);

        return redirect()->route('albums.index')->with('Succes','Your album has been properly updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album = Album::find($id);

        if (!$album)
        {
            return redirect()->route('albums.index')->with('error', 'Album not found');
        }
        $album -> delete();
        {
            return redirect()->route('albums.index')->with('error', 'Album is good');
        }
    }
}
