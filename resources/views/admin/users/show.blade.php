@extends('layouts.admin')
@section('content')
    <table class="table table-striped">
        <tbody>
            <tr>
                <th scope="row">Id</th>
                <td>{{$user->id}}</td>
            </tr>
            <tr>
                <th scope="row">Name</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{!! $user->email !!}</td>
            </tr>
            <tr>
                <th scope="row">Created</th>
                <td>{{$user->created_at}}</td>
            </tr>
            <tr>
                <th scope="row">Modified</th>
                <td>{{$user->updated_at}}</td>
            </tr>
        </tbody>
    </table>
@endsection
