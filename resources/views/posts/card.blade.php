<?php /** @var App\Post $post */ ?>
<div class="card mt-3 mb-5">
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
        <b>By: </b>{{$post->author->name}} <b>At:</b> {{$post->human_date}} <br>
        <b>Comments:</b> {{$post->comments()->count()}}
        <b>Comments today:</b> {{$post->commentsToday()->count()}}
    </div>
    @if(!isset($posts))
        <div class="card-body">
            Comments:
        </div>
        @auth
            <div class="card-footer text-muted">
                <form action="/posts/{{$post->id}}/comment" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" rows="4" id="comment" name="comment"
                                  placeholder="Insert comment here ..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        @endauth
        @foreach($post->comments as $comment)
            <div class="card-footer text-muted">
                <b>By: </b> {{$comment->user->name}} <br>
                {{$comment->body}}
            </div>
        @endforeach
    @endif
</div>
