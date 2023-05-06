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
  margin-top: 5px;
  width: 100%;
  text-align: center;
  background-color: #fff;
  border: 2px solid #000;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  overflow-y: scroll;
  max-height: 400px; /* adjust as needed */
}
td {
  width: 20%;
  padding: 10px;
  text-align: center;
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
        .tdesign {
    background-color: transparent !important;
    font-family: "Concert One", cursive !important;
    color: #1F87E8 !important;
    font-weight: 900 !important;
    text-align: center !important;
    border: none !important;
    padding: 10px 10px !important;
    text-transform: uppercase;
}
        .buff {
  padding: 0px 0px 0px 5px!important;
  max-height: 400px;
  overflow: auto;
  margin: 0 auto!important;
  text-align: center; /* added to center the table */
}
.buff2 {
  
  padding: 40px 0px 0px 5px!important;
  max-width: 400px!important;
  margin: 0 auto!important;
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