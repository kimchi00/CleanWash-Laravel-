@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="buff">
                <img src="{{ asset('assets/car2.png') }}" alt="Car Image" width="70" height="70" style="display:block; margin:auto;">
                <div class="card-header mb-2">
                    {{ __('MY APPOINTMENT') }}
                    <hr style="border-top: 5px solid #5F85B2">
                </div>
                <div class="card">
                    <div class="card-header">
                        APPOINTMENT TRACKER
                    </div>
                    <div class="card-body">
                        @if($appointments->isNotEmpty())
                            <div>
                                <strong>Name:</strong> {{ $appointments->last()->name }}
                            </div>
                            <div>
                                <strong>Email:</strong> {{ $appointments->last()->email }}
                            </div>
                            <div>
                                <strong>Contact Number:</strong> {{ $appointments->last()->contact_number }}
                            </div>
                            <div>
                                <strong>Service Type:</strong> {{ $appointments->last()->service_type }}
                            </div>
                            <div>
                                <strong>Date and Time:</strong> {{ $appointments->last()->datetime }}
                            </div>
                            <div>
                                <strong>Status: 
                                    <span style="color: 
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
                                        {{ $appointments->last()->status }}
                                    </span>
                                </strong>
                            </div>
                            <hr>
                            <a href="{{ route('admindb') }}" style="text-decoration: none; color: inherit;">
                                <strong> {{ __('Show Appointment History') }} </strong>
                            </a>
                        @else
                            <p>No appointments found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
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
    padding: 90px 0px 0px 5px!important;
    max-width: 400px!important;
    margin: 0 auto!important;
    margin-top: 20px!important;
}

</style>
