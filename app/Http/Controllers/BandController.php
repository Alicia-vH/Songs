<?php

namespace App\Http\Controllers;

use App\Http\Requests\BandRequest;
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



        return view('bands.index', ['bands' => $bands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BandRequest $request)
    {
        /*dd($request->all();*/
        /*$data = $request->validate([
            'name' => 'required|max:100',
            'genre' => 'max:255',
            'founded' => 'max:4',
            'active_till' => 'date',
        ]);*/

        Band:: create($request->validated());

        return redirect()->route('bands.index')->with('Succes','Your band has been properly saved.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $band = Band::find($id);
        $albums = $band->albums;

        return view('bands.show', compact('band', 'albums'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $band = Band::find($id);

        return view('bands.edit', ['band' => $band]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'genre' => 'max:255',
            'founded' => 'max:4',
            'active_till' => 'date_format:Y-m-d',
        ]);

        $band = Band::findOrFail($id);
        $band->update($request->all());

        return redirect()->route('bands.index')->with('Succes','Your band has been properly updated.');
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
