@extends('layouts.app')



@section('content')


        <div class="tile is-12   is-ancestor">
            <div class="tile is-3 is-parent">
                <div class="tile is-child">
                    <img src="{{ asset('img/'.$organization->sigla.'.png') }}" alt="">
                </div>

            </div>
            <div class="tile is-vertical is-parent">
                <div class="tile is-child box">
                    <p style="color: #0a0a0a">{{$organization->name}}</p>
                </div>
                <article class="tile is-child box ">

                    <p style="color: #0a0a0a">{{$organization->description}}</p>
                </article>
            </div>


            <div class="tile is-3 is-vertical is-parent ">
                <article class="tile is-child has-text-centered">
                    <ul style=" list-style-type: none; ">
                        @foreach ($organization->teams as $key => $team)
                            <li style="display: inline;  float: left; padding: 5px;">
                                <figure class="image is-64x64">
                                    <img src="{{ asset('img/'.$team->modalidade->sigla.'.png') }}" alt="" onclick="some()">
                                </figure>
                            </li>
                    @endforeach
                        </ul>
                </article>

                <article class="tile">
                    <div class="tile is-child box" style="display:none;" id="players">
                        <ul style=" list-style-type: none; ">
                            @foreach ($organization->teams[0]->players as $key => $player)
                                <li style="display: inline;  float: left; padding: 5px;">
                                    <p style="color: #0a0a0a">{{$player->name}}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </article>

            </div>

        </div>






@endsection


<script>
    function some() {
        document.getElementById('players').style.display = "block";
    }
</script>