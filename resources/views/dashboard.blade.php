@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/posts/create" class="btn btn-primary">Buat Artikel</a>
                        <h3>Artikel yang anda buat</h3>
                        @if(count($posts) > 0 )
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th> {{--  buat edit sama delete  --}}
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Ubah</a></td> {{--  buat edit sama delete  --}}
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('hapus', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        @else
                            <p>Tidak ada artikel</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection