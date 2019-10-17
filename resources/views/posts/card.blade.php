<?php /** @var App\Post $post */ ?>
<div class="card mt-3">
    <img src="https://picsum.photos/id/{{$post->id}}/1068/300/?blur&grayscale" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>

        @if(isset($posts))
            <p class="card-text">{!! $post->snippet !!}...</p>
            <a href="/posts/{{$post->id}}" class="btn btn-primary">Read more</a>
        @else
            <p class="card-text">{!! $post->body !!}</p>
        @endif
    </div>
    <div class="card-footer text-muted">
        <b>By: </b>{{$post->author->name}} <b>At:</b> {{$post->created_at}}
    </div>
</div>
