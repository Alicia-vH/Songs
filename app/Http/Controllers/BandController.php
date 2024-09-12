<?php

namespace App\Http\Controllers;

use App\Http\Requests\BandRequest;
use App\Models\Album;
use App\Models\Band;
use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bands = Band::all(); // Get all bands
        $albums = Album::all(); // Get all albums

        return view('bands.index', compact('bands', 'albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $albums = Album::all(); // Get all albums

        return view('bands.create', compact( 'albums'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request->all());

        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'genre' => 'nullable|string|max:255',
            'founded' => 'nullable|integer|digits:4',
            'active_till' => 'nullable|string|max:255',
        ]);

        Band::create($validatedData); // Create a new band

        return redirect()->route('bands.index')->with('Succes','Your band has been properly saved.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       // $band = Band::find($id);
        $band = Band::with('albums')->findOrFail($id); // Get the band with albums
        $albums = $band->albums; // Get the albums of the band

        return view('bands.show', compact('band', 'albums'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $band = Band::find($id); // Find the band
        $albums = Album::all(); // Get all albums

        return view('bands.edit', ['band' => $band], compact('albums'));
    }


    public function update(BandRequest $request, $id)
    {

        $band = Band::findOrFail($id); // Find the band

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'genre' => 'nullable|string|max:255',
            'founded' => 'nullable|integer',
            'active_till' => 'nullable|string|max:255',
        ]);

        // Update the band
        $band->update($validatedData);

        return redirect()->route('bands.index')->with('success', 'Band updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $band = Band::find($id); // Find the band

        // Check if the band exists
        if (!$band)
        {
            return redirect()->route('bands.index')->with('error', 'Band not found'); // Redirect back if band not found
        }
        $band -> delete();
        {
            return redirect()->route('bands.index')->with('error', 'Band is good'); // Redirect back if band not found
        }
    }
}
