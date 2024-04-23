@extends('app')
<!-- Contenido principal -->
    @section('content')


    <div class="row row-cols-1 row-cols-md-3 g-4">
        @include('pokemon.cardPokemon')
    </div>
@endsection

