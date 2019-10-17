@extends('layout')
@section('title', $post->title)
@section('content')
        @include('posts.card')
@endsection
