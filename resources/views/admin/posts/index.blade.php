@extends('layouts.admin')
@section('content')
    <a class="btn btn-primary" href="/admin/posts/new">Add Post</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Last Modified</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->author->name}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <a class="btn btn-primary" href="posts/{{$post->id}}">View</a>
                    <a class="btn btn-primary" href="posts/edit/{{$post->id}}">Edit</a>
                    <a class="btn btn-danger" href="posts/delete/{{$post->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$posts->links()}}
@endsection
