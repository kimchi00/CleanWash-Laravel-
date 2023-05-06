@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Concert+One&display=swap');
        body {
            background: url("../assets/bg2.png") no-repeat center center fixed !important;
            background-size: cover !important;
        }
        table {
            border-collapse: collapse;
            margin-top: 50px;
            width: 80%;
            background-color: #fff;
            border: 2px solid #000;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        table th {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: 1px solid #000;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
        }

        table td {
            padding: 10px;
            border: 1px solid #000;
            font-size: 16px;
            text-align: center;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        h1 {
    	text-align: center;
    	font-family: "Nunito", sans-serif; /* change font family to Nunito */
   	 	font-size: 36px;
    	margin-top: 30px;
    	font-weight: bold;
			}

        p {
            font-size: 24px;
            text-align: center;
            margin-top: 50px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .form-control {
            padding: 10px;
            margin: 0px 0px 20px 0px;
            font-size: 18px;
            border: 1px solid #5F85B2;
            border-radius: 5px;
        }

        .form-control:focus {
            outline: none;
            box-shadow: none;
            border: 1px solid #5F85B2;
        }

        .form-check-input {
            margin-top: 5px;
        }

        .btn-primary {
            background-color: #5F85B2;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            margin-right: 10px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #34495E;
        }

        .btn-link{
color: #3498DB;
text-decoration: none;
}
  .btn-link:hover {
        color: #2980B9;
    }
	</style>
</head>

@section('content')
    
<div class="buff2 col-md-8 offset-md-10">
        <img src="{{ asset('assets/car2.png') }}" alt="Car Image" width="70" height="70" style="display:block; margin:auto;">
        <div class= "tdesign mb-2">
            <h1>Appointment <br> Overview</h1>
            <hr style="border-top: 5px solid #000080">
        </div>
    </div>
    <div class="buff col-md-8 offset-md-10">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Service Type</th>
                    <th>Date and Time</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($appointmentHistory->sortByDesc('datetime') as $appointment)
                    <tr>
                        <td>
                            {{ $appointment->name }}
                        </td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->contact_number }}</td>
                        <td>{{ $appointment->service_type }}</td>
                        <td>{{ $appointment->datetime }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No appointments found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    </div>
@endsection