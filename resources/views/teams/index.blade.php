@extends('layouts.app')



@section('content')


        <!-- Hero content: will be in the middle -->

            <table class="table is-fullwidth is-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Organization</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($teams as $key => $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->organization->name }}</td>

                        <td>
                            <a class="btn btn-info" href="{{ route('teams.show',$team->id) }}">Show</a>
                            <a class="btn btn-info" href="{{ route('teams.destroy',$team->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>

        </div>


        <div class="box content" style="background-color: #f39c12">
            @foreach ($teams as $key => $team)

            <article class="post">

                <div class="media">
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <label class="is-bold"
                                       style="width: 400px; font-size:22px;  color: #fff; ">
                                    Organizacao: </label>
                                <label class="is-bold"
                                       style="width: 400px; font-size:22px;  color: #161C1C; ">
                                    For The Win </label>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
                @endforeach
        </div>







@endsection



