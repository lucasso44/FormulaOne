@extends('layouts.welcomeapp')
@section('content')
<div class="welcome-container container">
    <div class="row">
        <div class="md-col-12">
            <div class="title m-b-md">
                Formula1 World
                <p class="lead">Welcome to the World of Formula1</p>
            </div>
            <div>
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Sign In</a> 
                &nbsp;<a href="{{ route('register') }}" class="btn btn-success btn-lg">Sign Up</a>
            </div>
        </div>
    </div>
</div>
@endsection


