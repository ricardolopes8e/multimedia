@extends('layouts.app')



@section('content')

    <div class="columns is-12">
        <div class="column is-3">
        </div>
        @foreach ($organizations as $key => $organization)
        <div class="column is-3">
            <div class="card has-text-centered ">

                <div class="card-content">
                    <figure class="image is-square">
                        <img src="{{ asset('img/'.$organization->sigla.'.png') }}" style=" margin:auto; border-radius: 50%; width: 75%; height: 75%; background-color: #292929 " alt="">
                    </figure>
                    <h1 class="title title-text is-1" >{{$organization->name}}</h1>

                </div>
            </div>
        </div>
        @endforeach
        <div class="column is-3">
        </div>


    </div>




@endsection



