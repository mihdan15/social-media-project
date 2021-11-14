@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-6 col-sm-offset-3">
        @if (Session::has('success'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {{ Session::get('success')}}
        </div>
        @endif
        <form method="post">
        @csrf
        <div class="panel panel-default">
            <div class="panel-body">    
                <div class="form-group" {{ $errors->has('title') ? 'has-error' : ''}}>
                    <input type="text" name="title" class="form-control" placeholder="Masukkan Judul Postingan Anda">
                    @if ($errors->has('title'))
                        <small class="text-danger">{{ $errors->first('title')}}</small>
                    @endif
                </div>
                <div class="form-group" {{ $errors->has('body') ? 'has-error' : ''}}>
                    <textarea name="body" rows="8" cols="80" class="form-control" placeholder="Tuliskan Isi Postingan Anda"></textarea>
                    @if ($errors->has('body'))
                        <small class="text-danger">{{ $errors->first('body')}}</small>
                    @endif                   
                </div>
                <input type="submit" value="Post" class="btn btn-primary btn-block">
            </div>
        </div>
        </form>

        @foreach ($posts as $post)
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                <h2>{{ $post->user->name}}</h2>
                </div>     
                <div class="panel-title">
                <h1>{{ $post->title}}</h1>
                </div>                          
            </div>
            <div class="panel-body">
                {{ $post->body}}              
            </div>
            <div class="panel-footer">
                <a href="a" class="btn btn-link">Likes</a>
                <a href="a" class="btn btn-link">Dislikes</a>
                <a href="a" class="btn btn-link">Comments</a>
            </div>
            <div class="panel-footer">
                {{ $post->created_at }}
            </div>
        </div>


        @endforeach



    </div>
    </div>
</div>


@endsection