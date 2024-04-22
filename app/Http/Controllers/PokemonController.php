<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Http\Requests\StorePokemonRequest;
use App\Http\Requests\UpdatePokemonRequest;
use App\Models\Habilidades;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pokemon.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $habilidades = Habilidades::all();
        return view('pokemon.create', compact('habilidades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePokemonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePokemonRequest $request, Pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        //
    }
}
