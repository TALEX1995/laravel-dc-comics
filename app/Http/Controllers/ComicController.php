<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comic();

        $comic->fill($data);

        $comic->save();

        return to_route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // Validation
        $request->validate([
            'title' =>  ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'description' => 'string|nullable',
            'thumb' => 'string|nullable',
            'price' => 'string|max:255|nullable|min:0',
            'series' => 'string|max:255|nullable',
            'sale_date' => 'string|max:255|nullable',
            'type' => 'string|max:255|nullable',
            'artists' => 'string|max:255|nullable',
            'writers' => 'string|max:255|nullable',
        ]);

        $data = $request->all();

        $comic->fill($data);

        $comic->save();

        return to_route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
