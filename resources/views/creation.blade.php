@extends('layouts.app')

@section('content')
<div class="homepage vh-100 creation-hp d-flex align-items-center justify-content-center">
    <div class="container-fluid text-center">
        <button class="btn"><img src="assets/car1.png" alt=""> </button>
        <h1 class="heading1 text-yellow">Welcome!</h1>
        <h2 class="heading1 text-yellow">Please sign up or login<br> to continue</h2>
        <div class="d-flex justify-content-center mt-5">
            <a href="{{ route('login') }}" class="btn custom-btn text-white px-4 py-2 btn-log-in">Log In</a>
            <a href="{{ route('register') }}" class="btn custom-btn px-4 py-2 btn-sign-up">Sign Up</a>
        </div>
    </div>
</div>
@endsection