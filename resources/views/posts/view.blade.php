@extends('layouts.public')
@section('title', $post->title)
@section('content')
        @include('posts.card')
@endsection
