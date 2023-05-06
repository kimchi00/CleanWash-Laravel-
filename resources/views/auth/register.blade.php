@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="buff">
            <img src="{{ asset('assets/car2.png') }}" alt="Car Image" width="70" height="70" style="display:block; margin:auto;">
                <div class="card-header px-5">{{ __('Register') }}
                <hr style="border-top: 5px solid #5F85B2">
                </div>

                <div class="card-body">
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 row text-left">
                            <div class="col-md-8 offset-md-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name" style="padding: 10px; margin: 0px 0px 10px 0px;>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       
                            <div class="col-md-10 offset-md-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Email Address" style="padding: 10px; margin: 0px 0px 10px 0px;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                      
                            <div class="col-md-8 offset-md-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" style="padding: 10px; margin: 0px 0px 10px 0px;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-8 offset-md-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" style="padding: 10px; margin: 0px 0px 10px 0px;" >
                            </div>

                <div class="row mb-0">
                    <div class="col-md-5 offset-md-4 text-center">
                     <button type="submit" class="btn btn-primary">
                     {{ __('Register') }}
                  </button>
                </div>
            </div>
                    </form>
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

.card-header {
    background-color: transparent !important;
    font-size: 28px !important;
    color: #1F87E8 !important;
    text-align: center !important;
    font-weight: bold !important;
    border: none !important;
    padding: 10px 10px !important;
    height: auto !important;
}
.buff {
  padding: 90px 0px 0px 5px!important;
  max-width: 400px!important;
  margin: 0 auto!important;
  margin-top: 20px!important;
}

</style>