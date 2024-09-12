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
        $bands = Band::all();
        $albums = Album::all();

        return view('bands.index', compact('bands', 'albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        $bands = new Band();
        $albums = Album::all();

        return view('bands.create', compact( 'albums'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        /*dd($request->all();*/
//        $data = $request->validate([
//            'name' => 'required|max:100',
//            'genre' => 'max:255',
//            'founded' => 'max:4',
//            'active_till' => 'date',
////            'band_id' => 'required',
//        ]);
//
//        Band:: create($data);
//var_dump($request);
//        $band = Band::findOrFail($request);
       // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'genre' => 'nullable|string|max:255',
            'founded' => 'nullable|integer|digits:4',
            'active_till' => 'nullable|string|max:255',
//            'album_id' => 'exists:albums,id',
        ]);
//        var_dump($_POST['band_id']);
//        exit;
//        $band = new Band();
//        $band->name = $request->name;
//        $band->save();
        // Update the band
//        $addresses = $request->get('band_id');
//     var_dump($addresses);exit;
        $band = Band::create($validatedData);
//        $band->albums()->createMany($addresses);


        return redirect()->route('bands.index')->with('Succes','Your band has been properly saved.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $band = Band::find($id);
        $band = Band::with('albums')->findOrFail($id);
        $albums = $band->albums;

        return view('bands.show', compact('band', 'albums'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $album = Album::with('band')->findOrFail($id);
        $band = Band::all();
//        $albums = Album::all();

        return view('bands.edit', ['band' => $band], compact('album'));
    }


    public function update(BandRequest $request, $id)
    {
//        $request->validate([
//            'name' => 'required|max:100',
//            'genre' => 'max:255',
//            'founded' => 'max:4',
//            'active_till' => 'date_format:Y-m-d',
//        ]);
//
//        $band = Band::findOrFail($id);
//        $band->update($request->all());
//
//        return redirect()->route('bands.index')->with('Succes','Your band has been properly updated.');

        $band = Band::findOrFail($id);

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
        $band = Band::find($id);

        if (!$band)
        {
            return redirect()->route('bands.index')->with('error', 'Band not found');
        }
        $band -> delete();
        {
            return redirect()->route('bands.index')->with('error', 'Band is good');
        }
    }
}
