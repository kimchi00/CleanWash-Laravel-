<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Appointment;

class AppointmentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $appointments = Appointment::all();
    return view('admindb', ['appointments' => $appointments]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'service_type' => 'required',
            'datetime' => 'required|date',
        ]);
    
        Appointment::create($validatedData);
    
        // Add any additional logic or redirect response as per your application's requirements
    
        return redirect()->back()->with('success', 'Appointment request submitted successfully.');
    }
}






