@forelse ($pokemons as $pokemon)
<div class="col">
    <div class="card" style="width: 15rem;">
        {{-- {{ $pokemon->ruta_imagen }} --}}
        <img src="{{ asset('storage/' . $pokemon->ruta_imagen) }}" class="card-img-top                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               " alt="...">


        <div class="card-body">
            <h5 class="card-title">{{ $pokemon->nombre }}</h5>
            <p class="card-text"><strong>Tipo: </strong> {{ $pokemon->tipo }}</p>
            <p class="card-text"><strong>Peso: </strong> {{ $pokemon->peso }}</p>
            <p class="card-text"><strong>Altura: </strong> {{ $pokemon->altura }}</p>
            <a href="#" class="btn btn-primary">Ver más</a>
        </div>
    </div>
</div>
@empty
<div class="col-sm-3">

    <div class="card" style="width: 15rem;">
        <img src="{{ asset('images/pokemon/sin_desbloquear.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Sin registrar</h5>
            <p class="card-text"><strong>Tipo: </strong> Sin registrar</p>
            <p class="card-text"><strong>Peso: </strong> Sin registrar</p>
            <p class="card-text"><strong>Altura: </strong> Sin registrar</p>
            <a href="#" class="btn btn-primary disabled">Ver más</a>
        </div>
    </div>
</div>

@endforelse
