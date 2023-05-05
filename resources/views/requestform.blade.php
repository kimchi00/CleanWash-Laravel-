@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="buff">
                <img src="{{ asset('assets/car2.png') }}" alt="Car Image" width="70" height="70" style="display:block; margin:auto;">
                <div class="card-header mb-2">   
                    {{ __('APPOINTMENT REQUEST FORM') }}
                    <hr style="border-top: 5px solid #5F85B2">
                </div>
               
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row text-left">
                            <div class="col-md-8 offset-md-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name" style="padding: 10px; margin: 0px 0px 10px 0px;">
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-left">
                            <div class="col-md-8 offset-md-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address" style="padding: 10px; margin: 0px 0px 10px 0px;">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-left">
                            <div class="col-md-8 offset-md-2">
                                <input id="contact_number" type="tel" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" required autocomplete="tel" pattern="[0-9]+" title="Please enter only numeric values" autofocus placeholder="Contact Number" style="padding: 10px; margin: 0px 0px 10px 0px;">
                                @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-left">
                            <div class="col-md-8 offset-md-2">
                                <select id="date" name="date" class="form-control">
                                    <option value="2023-05-06">May 6, 2023</option>
                                    <option value="2023-05-07">May 7, 2023</option>
                                    <option value="2023-05-08">May 8, 2023</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-1 mt-3">
                            <div class="col-md-8 offset-md-2 text-center">
                                <button type="submit" class="btn btn-primary custom-btn mr-2">
                                    {{ __('Submit Request') }}
                                </button>
                                <button type="reset" class="btn btn-secondary custom-btn">
                                    {{ __('Reset') }}
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

