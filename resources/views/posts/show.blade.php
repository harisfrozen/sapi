@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Kembali</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Ditulis pada {{$post->created_at}} oleh {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)    
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Ubah Artikel</a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Hapus Artikel', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
    @endif
@endsection