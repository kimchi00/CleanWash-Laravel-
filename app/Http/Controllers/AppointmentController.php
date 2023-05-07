<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $user = Auth::user();
        $appointments = $user->appointments;

        return view('admindb', compact('appointments'));
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

        $user = Auth::user();
        $user->appointments()->create($validatedData);

        return redirect()->back()->with('success', 'Appointment request submitted successfully.');
    }

    public function viewAppointments()
    {
        $user = Auth::user();
        $appointments = $user->appointments;

        return view('viewAppointments', compact('appointments'));
    }


    public function show($id)
    {
        $user = Auth::user();
        $appointment = $user->appointments()->findOrFail($id);

        return view('viewAppointments', compact('appointment'));
    }

    
}
