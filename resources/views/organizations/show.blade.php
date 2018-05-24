@extends('layouts.app')



@section('content')


    <div class="container organization" style="">


        <div class="tile is-12 is-vertical  is-ancestor">
            <div class="tile is-12 is-parent">
                <div class="tile  is-child">
                </div>
                <div class="tile is-3 is-child">
                    <img class="logo-org" src="{{ asset('img/'.$organization->sigla.'.png') }}" alt="">
                </div>
                <div class="tile is-1 is-child">
                </div>
                <div class="tile is-3 is-child ">
                    <p class="description" style="" >{{$organization->description}}</p>
                    <ul style=" list-style-type: none; margin: auto; padding-top: 10px;">
                        @foreach ($organization->teams as $key => $team)
                            <li style="
                            display: inline;   margin:auto; float: left; padding: 5px;">
                                <figure class="image is-64x64">
                                    <img class="grow" src="{{ asset('img/'.$team->modalidade->sigla.'.png') }}" alt="" onclick="some()">
                                </figure>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tile is-child">
                </div>
            </div>



        </div>




    </div>

@endsection


<script>
    function some() {
        document.getElementById('players').style.display = "block";
    }
</script>