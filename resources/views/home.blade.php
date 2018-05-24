@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 200px;">



        <div class="columns  is-12">

            <div class="column is-three-fifths is-offset-one-fifth">
                <video class="videos" controls>
                    <source src="{{ asset('movie.mp4')}}" type="video/mp4">
                </video>

            </div>


        </div>

    </div>
@endsection
