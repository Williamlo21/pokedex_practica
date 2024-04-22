<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<style>
        /* Estilos adicionales para el contenido */
        body {
            padding-bottom: 70px; /* Altura del footer */
            min-height: 100vh;
            position: relative;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 70px; /* Altura del footer */
            background-color: #343a40; /* Color de fondo */
            color: white; /* Color del texto */
            text-align: center; /* Alineación del texto */
            line-height: 70px; /* Centrado vertical del texto */
        }
    </style>
<body class="d-flex flex-column container-fluid">
<!-- Barra de navegación superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mi Sitio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home.index') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pokemon.create') }}">Crear Pokemon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
