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

        return view('appointments.index', compact('appointments'));
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
    
        
    
        return redirect()->back()->with('success', 'Appointment request submitted successfully.');
    }

    public function viewAppointments()
    {
        $appointments = Appointment::all();
        
        return view('viewAppointments',  compact('appointments'));
    }

    
    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);

        return view('viewAppointments', compact('appointment'));
    }


}






