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

                        <a href="{{ url('/AdminEdit/' . $user->id) }}" class="btn btn-primary">Edit</a>


                        <form class="d-inline" action="{{ url('/admin_dashboard/' . $user->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Del</button>
                        </form>
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>


    <div class="AddCategory">
        <a href="{{ url('/add_category') }}" class="btn btn-primary">
            Add Category
        </a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
                
            </tr>
        </thead>
        <tbody>

            @foreach ($category as $category)
                <tr>

                    
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>

                        <a href="{{ url('/edit_category/' . $category->id) }}" class="btn btn-primary">Edit</a>


                        <form class="d-inline" action="{{ url('/admin_dashboard/' . $category->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Del</button>
                        </form>
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
