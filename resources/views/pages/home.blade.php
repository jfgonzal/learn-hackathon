@extends('layout')
@section('content')

    <div class="jumbotron">


        <h1>LEARN Initiative</h1>
        <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
        @if(userLoggedIn())
            <button class="btn btn-primary"><a href="dashboard">Access your dashboard</a></button>
        @else
            <button class="btn btn-primary"><a href="auth/register">Register For Personalized Assistance</a></button>
        @endif
    </div>











@stop