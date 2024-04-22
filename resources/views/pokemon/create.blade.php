@extends('app')
<!-- Contenido principal -->
@section('content')

    <form action="{{ route('pokemon.store') }}" method="post">
        @csrf
        

    </form>
@endsection
