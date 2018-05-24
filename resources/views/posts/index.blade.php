@extends('layouts.app')



@section('content')
    <div class="container" style="padding-top: 100px; ">


        <div class="columns is-12">
            @foreach ($posts as $key => $post)
                <div class="column is-3">
                    <div class="card  has-text-centered ">

                        <div class="card-content">
                            <figure class="image is-square simbol">
                                <img src="{{ asset('img/'.$post->name.'.jpg') }}"
                                     style=" margin:auto; border-radius: 50%; width: 75%; height: 75%; background-color: #292929 "
                                     alt="">
                            </figure>

                            <h3 class="title is-3" style="color: #7DA0B1 "> {{ $post->title}}</h3>
                            <a class="button is-large card-button title-text"
                               href="{{ route('posts.show',$post->id) }}">Ver</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection



