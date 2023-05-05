<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;


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

Route::get('/admindb', [AppointmentController::class, 'index'])->name('admin.dashboard');
// Remove this route since it is not being used
// Route::get('/admindb', function () {
//     return view('admindb');
// })->name('admindb');