@extends('layout')
@section('title', 'Blog Home Page')
@section('content')
    <h1>Our cool Blog</h1>
    @foreach($posts as $key=>$post)
        @include('posts.card')
    @endforeach
@endsection
