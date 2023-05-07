@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="buff">
                <img src="{{ asset('assets/car2.png') }}" alt="Car Image" width="70" height="70" style="display:block; margin:auto;">
                <div class="card-header mb-2">
                    {{ __('MY APPOINTMENT') }}
                    <hr style="border-top: 5px solid #000080">
                </div>
                <div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ __('Latest Appointment') }}</h3>
    </div>
    <div class="card-body text-center">
        @if($appointments->isNotEmpty())
            @php
                $latestAppointment = $appointments->last();
            @endphp
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <div class="appointment-label">
                        <label for="name">{{ __('Name') }}</label>
                        </div>
                        <p class="form-control-plaintext">{{ $latestAppointment->name }}</p>
                    </div>
                    <div class="form-group">
                    <div class="appointment-label">
                        <label for="email">{{ __('Email') }}</label>
                        </div>
                        <p class="form-control-plaintext">{{ $latestAppointment->email }}</p>
                    </div>
                    <div class="form-group">
                    <div class="appointment-label">
                        <label for="contact_number">{{ __('Contact Number') }}</label>
                        </div>
                        <p class="form-control-plaintext">{{ $latestAppointment->contact_number }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <div class="appointment-label">
                        <label for="service_type">{{ __('Service Type') }}</label>
                        </div>
                        <div class="appointment-info">
                        <p class="form-control-plaintext">{{ $latestAppointment->service_type }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="appointment-label">
                        <label for="datetime">{{ __('Date and Time') }}</label>
                        </div>
                        <p class="form-control-plaintext">{{ $latestAppointment->datetime }}</p>
                    </div>
                    <div class="form-group">
                    <div class="appointment-label">
                        <label for="status">{{ __('Status') }}</label>
                        </div>
                        <p>
                            <strong><span style="color: 
                                        @if($appointments->last()->status == 'Pending') 
                                            #CC7722
                                        @elseif($appointments->last()->status == 'On-going') 
                                            green
                                        @elseif($appointments->last()->status == 'Cancelled') 
                                            red
                                        @elseif($appointments->last()->status == 'Completed') 
                                            blue
                                        @endif
                                        ">
                                {{ $latestAppointment->status }}
                            </strong></span>
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-info">
                <i class="fa fa-history"></i>
                {{ __('Show Appointment History') }}
            </a>
        @else
            <p>{{ __('No appointments found.') }}</p>
        @endif
    </div>
</div>

@endsection

<style>
body {
    background: url("../assets/login.png") no-repeat center center fixed !important; /* Replace "../assets/login.jpeg" with the path to your desired image */
    background-size: cover !important; /* Adjust the background image size to cover the entire body */
}
form {
    padding:  10px;
}
.card-header {
    background-color: transparent !important;
    font-size:40px!important;
    color: #1F87E8 !important;
    text-align: center!important;
    font-weight: bold!important;
    border: none !important;
    padding: 10px 10px !important;
    height: auto !important; /* Set the height of the card header to 100px to accommodate the resized image */
}
  
.buff {
    padding: 30 0px 0px 5px!important;
    max-width: 400px!important;
    margin: 0 auto!important;
}
.appointment-details {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(6, auto);
    grid-gap: 10px;
}

.appointment-label {
    font-weight: bold;
    color:#00008B;
    text-transform: uppercase;
}

.appointment-info {
    color: #B2BEB5;
    text-transform: uppercase;
}
.appointment-status {
    font-weight: bold;
}

.appointment-history-link {
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }

    .appointment-history-link:hover {
        background-color: #0056b3;
        color: #fff;
        transform: scale(1.1);
    }
    .buff2 {
  padding: 0px 0px 0px 5px!important;
  max-width: 200px!important;
}
</style>