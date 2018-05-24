@extends('layouts.app')



@section('content')

    <div class="container" style="padding-top: 100px; ">


        <div class="columns is-12">
            <div class="column is-3">
            </div>
            @foreach ($organizations as $key => $organization)
                <div class="column is-3">
                    <div class="card has-text-centered ">

                        <div class="card-content">
                            <figure class="image is-square simbol">
                                <img src="{{ asset('img/'.$organization->sigla.'.png') }}"
                                     style=" margin:auto; border-radius: 50%; width: 75%; height: 75%; background-color: #292929 "
                                     alt="">
                            </figure>
                            <a class="button is-large card-button title-text"
                               href="{{ route('organizations.show',$organization->id) }}">{{$organization->name}}</a>

                        </div>
                    </div>
                </div>
            @endforeach
            <div class="column is-3">
            </div>


        </div>
    </div>




@endsection



