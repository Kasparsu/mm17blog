@extends('layouts.admin')
@section('content')
    <form action="/admin/users/edit/{{$user->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
