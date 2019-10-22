<?php /** @var Illuminate\Pagination\LengthAwarePaginator $posts */?>
@extends('layout')
@section('title', 'Blog Posts')
@section('content')
    @foreach($posts as $key=>$post)
        @include('posts.card')
    @endforeach
    {{$posts->links()}}
@endsection
