@extends('layout.layout')

@section('title')
    Admin Dashboard
@endsection

@section('content')

<div class="AddUser">
    <a href="{{url('AdminRegister')}}" class="btn btn-primary">
        Add User 
    </a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{$user->email }}</td>
                <td>{{$user->role }}</td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Del</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
