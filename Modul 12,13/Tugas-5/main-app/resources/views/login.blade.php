@extends('layouts.template')
@section('title', 'Login')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <h4>Login</h4>
        <form method="POST" action="{{ route('auth') }}">
            @csrf
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            @if(session('msg'))
            <div class="alert alert-danger">{{ session('msg') }}</div>
            @endif
            <button class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>
@endsection
