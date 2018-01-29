    @extends('layouts.app');

    @section('content');
        <a href="/posts" class = "btn btn-default">Go Back</a>
        <h3>{{$post->title}}</h3>
       
        <div>
            {!!$post->body !!}
            <hr>
            <small>Written On {{$post->created_at}}</small>
        </div>
    @endsection;