@extends('layouts.app')



@section('content')
    <div class="container organization" >
        <!-- start of posts -->
        <div class="columns is-multiline is-centered">
            <!-- start of post -->
            <div class="column is-9">
                <div class="card post">
                    <!-- image for post -->
                    <div class="card-image">
                        <figure class="image">
                            <img src="{{ asset('img/'.$post->name.'.jpg') }}" alt="img">
                        </figure>
                    </div>
                    <!-- end of image for post -->

                    <!-- post header -->
                    <div class="card-content-header has-text-centered" style="background-color: #f5fffd">
                        <h4 class="title is-4">{{$post->title}}</h4>
                    </div>
                    <!-- end of post header -->

                    <!-- post content -->
                    <div class="card-content" style="background-color: #f5fffd">
                        <div class="content">
                            <div class="card-inner-wrapper">
                                <!-- post text -->
                                <div class="card-content-text">
                                    @foreach ($post->paragrafos as $key => $paragrafo)

                                    @endforeach
                                    <p> {{$paragrafo->description}}</p>


                                    <div class="columns is-multiline is-mobile">
                                        <div class="column "></div>
                                        <div class="column is-three-quarters">
                                            @if($post->video != '')
                                            <iframe src="{{$post->video}}" style="width: 640px; height: 480px;"></iframe>
                                            @endif
                                        </div>
                                        <div class="column"></div>
                                    </div>

                                </div>
                                <!-- end of post text -->


                                <!-- post footer -->
                                <div class="card-content-footer-small">

                                    <!-- post footer nav -->
                                    <div class="columns">
                                        <div class="column has-text-left">
                                            <a class="button is-small is-button-grey" href="{{route('posts.index')}}">Back</a>
                                        </div>
                                        <div class="column has-text-right">
                                            <i class="fa fa-calendar">
                                                <small>11:09 PM - 1 Jan 2016</small>
                                            </i>
                                        </div>
                                    </div>
                                    <!-- end of post footer nav -->
                                </div>
                                <!-- end of post footer -->

                            </div>


                        </div>
                    </div>
                </div>
                <!-- end of post content -->

                <br/>



            </div>
            <!-- end of post -->
        </div>
        <!-- end of post column -->
    </div>

@endsection



