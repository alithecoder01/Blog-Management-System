@extends('layout.layout')

@section('title')
    Admin Dashboard
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success"> {{ session('success') }}</div>
    @endif

    <div class="AddUser">
        <a href="{{ url('AdminRegister') }}" class="btn btn-primary">
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
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>

                        <a href="{{url('/AdminEdit/'.$user->id)}}" class="btn btn-primary">Edit</a>


                        <form class="d-inline" action="{{ url('/admin_dashboard/' . $user->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Del</button>
                        </form>
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
