<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Appointment;

namespace App\Http\Controllers;


class AppOverviewController extends BaseController
{
    public function handleFormSubmission(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $contact_number = $request->input('contact_number');
        $service_type = $request->input('service_type');
        $datetime = $request->input('datetime');

        return view('admindb', compact('name', 'email', 'contact_number', 'service_type', 'datetime'));
    }
}
