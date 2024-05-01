@include('layouts.header')
<!-- Contenido principal -->
@yield('css')
<div class="container flex-grow-1 mt-5">
    @yield('content')

</div>
@include('layouts.footer')
