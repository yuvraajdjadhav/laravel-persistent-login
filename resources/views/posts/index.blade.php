@extends('layouts.app');

@section('content');
        <h3>Posts</h3>
        @if(count($posts) > 0)

        @foreach($posts as $post)

        <div class="well">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3> 
            <small>{{$post->created_at}}</small>
            <hr>
            &nbsp;&nbsp;
             <a href="/posts/{{$post->id}}/edit" class="btn btn-default  pull-right">Edit</a>
            {!!Form::open(['action' =>['PostsController@destroy',$post->id],'method' => 'POST' ,'class'=>'pull-right '])  !!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
            {!! Form::close() !!}
        </diV>
        @endforeach
        {{$posts->links()}}

        @else
        <p> No Post Found </p>
        @endif
@endsection;