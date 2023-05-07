<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\WelcomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/creation', function () {
    return view('creation');
})->name('creation');

Route::get('/requestform', function () {
    return view('requestform');
})->name('requestform');


Route::get('/users', 'App\Http\Controllers\AppointmentController@index');
Route::post('/appointments', 'AppointmentController@store')->name('appointments.store');


Route::get('/view-appointments', [AppointmentController::class, 'viewAppointments'])->name('viewAppointments');

Route::view('/admindb', 'admindb')->name('admindb');

Route::get('/admindb', [AppointmentController::class, 'index'])->name('admindb');

Route::get('/appointments/{id}', 'AppointmentController@show')->name('view.appointments');

Route::get('/appointments', 'AppointmentController@index')->name('appointments.index');

Route::get('/admindb', function () {
    
    $appointmentHistory = App\Models\Appointment::all(); 

    return view('admindb', ['appointmentHistory' => $appointmentHistory]);
})->name('admindb');


