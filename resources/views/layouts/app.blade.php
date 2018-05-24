<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>

<div id="app">


    @include('navbar.navbar')

    <section class="section is-paddingless" >

            @yield('content')


    </section>




</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bulma-carousel.js') }}"></script>

</body>

</html>
