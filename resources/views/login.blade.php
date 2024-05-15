@extends('layout.layout')

@section('title')
    Login
@endsection

@section('content')
    @if (session('failed'))
        <div class="alert alert-danger"> {{ session('failed') }}</div>
    @endif
    <div class="card">

        <div class="card-header">
            <div style="display: flex; justify-content: space-between;">
                <h4>Login</h4>
                <div class="btn btn-primary mt-10">
                    <a href="{{url('/register')}}" class="btn btn-primary">Register</a>
                 </div>
            </div>
        </div>

        <div class="card-body">

            <form action="{{'/login'}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="btn">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>

    </div>
@endsection
