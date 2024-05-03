@extends('app')
<!-- Contenido principal -->
@section('content')
    <h4>Crear Pokemon</h4>
    <form action="{{ route('pokemon.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="foto_pokemon">Foto pokemon</label>
        <input type="file" name="foto_pokemon" class="form-control" id="">

        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control @error('nombre') is-invalid @enderror " name="nombre" value="{{ old('nombre') }}">
        @error('nombre')
            {{ $message }}
        @enderror
        <label for="tipo">Tipo:</label>
        <select name="tipo" id="" class="form-control">
            <option value="" disabled selected>Seleccione un tipo</option>
            <option value="AGUA">AGUA</option>
            <option value="TIERRA">TIERRA</option>
            <option value="AIRE">AIRE</option>
            <option value="ELECTRICO">ELECTRICO</option>
        </select>

        <label for="altura">Altura:</label>
        <input type="number" name="altura" class="form-control @error('altura') is-invalid @enderror" value="{{ old('altura') }}">

        <label for="peso">Peso:</label>
        <input type="number" name="peso" class="form-control @error('peso') is-invalid @enderror" value="{{ old('peso') }}">

        <label for="habilidades">Habilidades:</label>
        <select name="habilidades" id=""  class="form-control" value="{{ old('habilidades') }}">
            <option value=""selected disabled>Seleccione la habilidad</option>
            @forelse ($habilidades as $habilidad )
                <option value="{{ $habilidad->id }}">{{ $habilidad->habilidad }}</option>
            @empty
                <option value="" disabled selected>No hay habilidades disponibles</option>
            @endforelse
        </select>
        <br>
        <button type="submit" class="btn btn-success btn-sm-3">Crear pokemon</button>
    </form>
@endsection
