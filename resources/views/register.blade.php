@extends('layout.layout')

@section('title')
    Registeration
@endsection

@section('content')
    <div class="card">

        <div class="card-header">
            <h4>Registeration</h4>
        </div>

        @if (@session('success'))
            <div class="alert alert-success"> {{session('success')}}</div>
        @endif

        <div class="card-body">
            @csrf
            <form action="{{route('register.store')}}" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label" >Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                    @error('name') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="mb-3">
                    <label for="email"  class="form-label" >Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required >
                </div>
                <div class="mb-3">
                    <label for="password"  class="form-label" >password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required >
                </div>

                <div class="btn">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>

@endsection