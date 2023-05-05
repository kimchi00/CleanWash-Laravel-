@extends('layouts.app')

@section('content')
<div class="homepage vh-100">
    <div class="d-flex align-items-center" style="height: 50%;">
        <div class="container-fluid">
            <h1 class="heading1 text-yellow">Book your online appointment now!</h1>
            <p class="fs-5 col-3 mt-4 mb-5">
                "Our online appointment booking platform offers a convenient way for busy car owners to schedule car
                wash services anytime and anywhere without the hassle of physically visiting a car wash facility."
            </p>
            @auth
                <a href="{{ route('requestform') }}" class="btn custom-btn text-white px-4 py-2 text-uppercase">Get Started</a>
                <a href="{{ route('requestform') }}" class="btn"><img src="assets/arrow.png" alt=""> </a>
            @else
                <a href="{{ route('creation') }}" class="btn custom-btn text-white px-4 py-2 text-uppercase">Get Started</a>
                <a href="{{ route('creation') }}" class="btn"><img src="assets/arrow.png" alt=""> </a>
            @endauth
        </div>
    </div>
</div>
@endsection
