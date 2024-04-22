@extends('app')
<!-- Contenido principal -->
@section('content')

    <form action="{{ route('pokemon.store') }}" method="post">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre">

        <label for="tipo">Tipo:</label>
        <select name="tipo" id="" class="form-control">
            <option value="" disabled selected>Seleccione un tipo</option>
            <option value="AGUA">AGUA</option>
            <option value="TIERRA">TIERRA</option>
            <option value="AIRE">AIRE</option>
            <option value="ELECTRICO">ELECTRICO</option>
        </select>

        <label for="altura">Altura:</label>
        <input type="number" name="altura" class="form-control">

        <label for="peso">Peso:</label>
        <input type="number" name="peso" class="form-control">

        <label for="habilidades">Habilidades:</label>
        <select name="habilidades[]" id=""  class="form-control">
            <option value=""selected disabled>Seleccione la habilidad</option>
            @forelse ($habilidades as $habilidad )
                <option value="{{ $habilidad->id }}">{{ $habilidad->habilidad }}</option>
            @empty
                <option value="" disabled selected>No hay habilidades disponibles</option>
            @endforelse
        </select>

    </form>
@endsection
