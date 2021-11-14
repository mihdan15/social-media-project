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
            <div class="panel-footer" data-postid="{{ $post->id }}">
                      @php
                          $i = Auth::user()->likes()->count();
                          $c = 1;
                          $likeCount = $post->likes()->where('like', '=', true)->count();
                          $dislikeCount = $post->likes()->where('like', '=', false)->count();
                      @endphp
                      @foreach (Auth::user()->likes as $like)
                          @if ($like->post_id == $post->id)
                              @if ($like->like)
                                  <a href="#" class="btn btn-link like active-like">Like <span class="badge">{{ $likeCount }}</span></a>
                                  <a href="#" class="btn btn-link like">Dislike <span class="badge">{{ $dislikeCount }}</span></a>
                              @else
                                  <a href="#" class="btn btn-link like">Like <span class="badge">{{ $likeCount }}</span></a>
                                  <a href="#" class="btn btn-link like active-like">Dislike <span class="badge">{{ $dislikeCount }}</span></a>
                              @endif
                              @break
                          @elseif ($i == $c)
                              <a href="#" class="btn btn-link like">Like <span class="badge">{{ $likeCount }}</span></a>
                              <a href="#" class="btn btn-link like">Dislike <span class="badge">{{ $dislikeCount }}</span></a>
                          @endif
                          @php
                              $c++;
                          @endphp
                      @endforeach
                      @if ($i == 0)
                          <a href="#" class="btn btn-link like">Like <span class="badge">{{ $likeCount }}</span></a>
                          <a href="#" class="btn btn-link like">Dislike <span class="badge">{{ $dislikeCount }}</span></a>
                      @endif
                      <a href="{{ route('post.show', [$post->id]) }}" class="btn btn-link">Comment</a>
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