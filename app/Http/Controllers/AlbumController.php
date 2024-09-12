<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\Band;
use App\Models\Song;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();
        $bands = Band::all();
        $songs = Song::all();

        return view('albums.index', compact('albums', 'bands','songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $album = new Album();
        $bands = Band::all();
        $songs = Song::all();

        return view('albums.create', compact('album','bands', 'songs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlbumRequest $request)
    {
//         $data = $request->validate([
//            'name' => 'required|string|max:100',
//            'year' => 'string|max:4',
//            'times_sold' => 'int|max:500000',
//            'band' => 'max:50',
//        ]);
//
//        Album:: create($data);
//
//        return redirect()->route('albums.index')->with('Succes','Your album has been properly saved.');

        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'year' => 'required|integer|digits:4',
            'times_sold' => 'required|integer',
            'band_id' => 'required|exists:bands,id',
            'album_songs' => 'array',
            'album_songs.*' => 'exists:songs,id'
        ]);

        // Create the album
        $album = Album::create([
            'name' => $validatedData['name'],
            'year' => $validatedData['year'],
            'times_sold' => $validatedData['times_sold'],
            'band_id' => $validatedData['band_id']
        ]);

        // Attach songs to the album if any
        if (isset($validatedData['album_songs'])) {
            $album->songs()->attach($validatedData['album_songs']);
        }

        return redirect()->route('albums.index')->with('success', 'Album created successfully.');
    }

    /**
     * Display the specified resource.
     */
    /*public function show(string $id)
    {
        $album = Album::find($id);
        $bands =

        return view('albums.show', ['album' => $album]);
    }*/
    public function show($id)
    {
        $album = Album::find($id);
        $band = $album->band; // Get the band associated with the album
        $song = $album->song;

        return view('albums.show', compact('album', 'band'), compact('album', 'song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $album = Album::find($id);
        $band = $album->band;
        $bands = Band::all();
        $songs = Song::all();

        return view('albums.edit', compact('album', 'band', 'songs', 'bands'));
    }

    public function update(Request $request, $id)
    {
//        $validatedData = $request->validate([
//            'name' => 'required|string|max:100',
//            'year' => 'string|max:4',
//            'times_sold' => 'int|max:500000',
//            'band' => 'max:150',
//            'song' => 'max:150',
//        ]);
//
//        Album::findOrFail($album)->update($validatedData);
//
//        return redirect()->route('albums.index')->with('Succes','Your album has been properly updated.');
        $album = Album::findOrFail($id);

        // Update album details
        $album->name = $request->input('album_name');
        $album->year = $request->input('year');
        $album->times_sold = $request->input('times_sold');
        $album->band_id = $request->input('band_id');
        $album->save();

        // Update the related songs
        if ($request->has('album_songs')) {
            $album->songs()->sync($request->input('album_songs')); // Sync will handle attaching and detaching
        } else {
            $album->songs()->sync([]); // If no songs are selected, detach all
        }

        return redirect()->route('albums.index')->with('success', 'Album updated successfully.');
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
