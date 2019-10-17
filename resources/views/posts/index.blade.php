@extends('layout')
@section('title', 'Blog Posts')
@section('content')
    @foreach($posts as $key=>$post)
        @include('posts.card')
    @endforeach
@endsection
