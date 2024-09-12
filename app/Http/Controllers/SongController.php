<?php

namespace App\Http\Controllers;
use App\Http\Requests\SongRequest;
use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::all(); // Get all songs

        return view('songs.index', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SongRequest $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|max:100',
        ]);

        Song:: create($request->validated()); // Create a new song

        return redirect()->route('songs.index')->with('Succes','Your song has been properly saved.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $song = Song::find($id); // Get the song

        return view('songs.show', ['song' => $song]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $song = Song::find($id); // Get the song

        return view('songs.edit', ['song' => $song]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $song)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|max:100',
        ]);

        Song::findOrFail($song)->update($validatedData); // Update the song

        return redirect()->route('songs.index')->with('Succes','Your song has been properly updated.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $song = Song::find($id); // Find the song

        // Check if the song exists
        if (!$song)
        {
            return redirect()->route('songs.index')->with('error', 'Song not found'); // Redirect back if song not found
        }
        $song -> delete();
        {
            return redirect()->route('songs.index')->with('error', 'Song is good'); // Redirect back if song not found
        }
    }
}
