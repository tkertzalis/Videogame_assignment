<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;


class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Videogame::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'release_date' => 'required',
            'genre' => 'required'
        ]);
     return Videogame::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Videogame::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $videogame = Videogame::find($id);
        $videogame->update($request->all());
        return $videogame;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Videogame::destroy($id);
    }

    /**
     * Filter videogames from storage by genre.
     */
    public function filter($genre)
    {
        return Videogame::where('genre', $genre)->get();
    }

     /**
     * Orders the specified resource from storage.
     */
    public function order($orderType)
    {
        return Videogame::orderBy('release_date', $orderType)->get();
    }
}


