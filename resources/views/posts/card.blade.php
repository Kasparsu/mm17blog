<?php /** @var App\Post $post */ ?>
<div class="card mt-3">
    @if($post->images()->first())
        <div style="height:300px; overflow:hidden;">
            <img src="{{$post->images()->first()->path}}" class="card-img-top" alt="{{$post->images()->first()->name}}">
        </div>
    @endif
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
        <b>By: </b>{{$post->author->name}} <b>At:</b> {{$post->human_date}}
    </div>
</div>
