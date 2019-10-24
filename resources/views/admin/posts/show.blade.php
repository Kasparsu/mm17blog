@extends('layouts.admin')
@section('content')
    <table class="table table-striped">
        <tbody>
            <tr>
                <th scope="row">Id</th>
                <td>{{$post->id}}</td>
            </tr>
            <tr>
                <th scope="row">Title</th>
                <td>{{$post->title}}</td>
            </tr>
            <tr>
                <th scope="row">Body</th>
                <td>{!! $post->body !!}</td>
            </tr>
            <tr>
                <th scope="row">Author</th>
                <td>{{$post->author->name}}</td>
            </tr>
            <tr>
                <th scope="row">Created</th>
                <td>{{$post->created_at}}</td>
            </tr>
            <tr>
                <th scope="row">Modified</th>
                <td>{{$post->updated_at}}</td>
            </tr>
        </tbody>
    </table>
@endsection
