<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PupilController;
use App\Http\Controllers\TutorController;
use App\Http\Livewire\SettingShow;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {
    Route::group(['middleware' => ['auth', 'verified']], function () {
        Route::get('/tutors', [TutorController::class, 'index'])->name('tutor.list');
        Route::get('/pupils', [PupilController::class, 'index'])->name('pupil.list');
        Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.list');
        Route::get('/settings', SettingShow::class)->name('settings');
    });
});
