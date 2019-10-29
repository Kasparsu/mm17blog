@extends('layouts.admin')
@section('content')
    <a class="btn btn-primary" href="/admin/users/new">Add User</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Last Modified</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->updated_at}}</td>
                <td>
                    <a class="btn btn-primary" href="users/{{$user->id}}">View</a>
                    <a class="btn btn-primary" href="users/edit/{{$user->id}}">Edit</a>
                    <a class="btn btn-danger" href="users/delete/{{$user->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$users->links()}}
@endsection
