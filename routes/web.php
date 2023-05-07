<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Models\Appointment;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/creation', function () {
    return view('creation');
})->name('creation');

Route::get('/requestform', function () {
    return view('requestform');
})->name('requestform');

Route::get('/admindb', [AppointmentController::class, 'index'])
    ->name('admin.dashboard')
    ->middleware('auth', 'admin','isAdmin');

Route::get('/users', 'App\Http\Controllers\AppointmentController@index');
Route::post('/appointments', 'AppointmentController@store')->name('appointments.store');
Route::get('/view-appointments', [AppointmentController::class, 'viewAppointments'])->name('viewAppointments');
Route::get('/appointments/{id}', 'AppointmentController@show')->name('view.appointments');
Route::get('/appointments', 'AppointmentController@index')->name('appointments.index');

Route::get('/admindb', function () {
    if (auth()->check() && auth()->user()->isAdmin()) {
        return redirect()->route('home');
    }

    $appointmentHistory = App\Models\Appointment::all(); 
    return view('admindb', ['appointmentHistory' => $appointmentHistory]);
})->name('admin.dashboard');

Route::get('/admindb', function () {
    $appointmentHistory = App\Models\Appointment::all(); 
    return view('admindb', ['appointmentHistory' => $appointmentHistory]);
})->name('admin.dashboard');

Route::put('appointments/{id}/update-status', 'AppointmentController@updateStatus')->name('appointments.updateStatus');

Route::delete('/appointments/{id}', 'AppointmentController@delete')->name('appointments.delete');

