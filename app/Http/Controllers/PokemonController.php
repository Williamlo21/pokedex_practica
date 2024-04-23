<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Http\Requests\StorePokemonRequest;
use App\Http\Requests\UpdatePokemonRequest;
use App\Models\Habilidad;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemon.index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $habilidades = Habilidad::all();
        return view('pokemon.create', compact('habilidades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePokemonRequest $request)
    {
        $data = $request->validate([
            'nombre' => 'string|required',
            'tipo' => 'required',
            'altura' => 'required|numeric',
            'peso' => 'required|numeric',
            'habilidades' => 'required',
            // 'foto_pokemon' => 'required|image|max:2048',
        ]);
        // @dd($request->habilidades);
        try{
            DB::beginTransaction();


            $pokemon = Pokemon::create([
                'nombre' => $data['nombre'],
                'tipo' => $data['tipo'],
                'altura' => $data['altura'],
                'peso' => $data['peso'],
            ]);

            // Asociar habilidades al Pokémon
            $pokemon->habilidades()->attach($data['habilidades']);

            DB::commit();
            return redirect()->route('pokemon.index')->with('success', 'pokemon registrado con éxito');
        }catch(QueryException $e){
            DB::rollBack();
            @dd($e->getMessage());
            return redirect()->back()->withInput()->with('Error al crear el pokemon');
        }


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
