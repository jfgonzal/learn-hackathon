<!-- resources/views/auth/login.blade.php -->
@extends('layout')
@section('content')
@include('errors')
<div class="col-md-6 col-md-offset-3">
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <div class="form-group">
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Login</button>
        </div>
    </form>
</div>
@stop