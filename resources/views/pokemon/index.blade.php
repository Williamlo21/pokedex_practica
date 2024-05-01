@extends('app')
<!-- Contenido principal -->
@section('css')
<style>
    .scrollable-content {
      height: 480px; /* Establece la altura máxima del contenido con scroll */
      overflow-y: auto; /* Permite el scroll vertical */
      padding: 10px; /* Añade un poco de espacio interno */
    }
</style>
@endsection
@section('content')
    <div class="card">
        <div class="row">
            <div class="col-sm-8 card container scrollable-content">

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="card-body">

                        @include('pokemon.cardPokemon')
                      
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-body">
                    <div class="card">
                        <img src="{{ asset('images/pokemon/escaner.png') }}" class="img-fluid rounded-circle" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
