@extends('layouts.admin')
@section('content')
    <form action="/admin/posts/edit/{{$post->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"
                placeholder="Post title"
                value="{{$post->title}}"
            >
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="12"
                      placeholder="Enter content here...">{{ $post->getOriginal('body') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
