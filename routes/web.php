<?php

use App\Http\Livewire\Invoice\Show as InvoiceShow;
use App\Http\Livewire\Regulation\Show as RegulationShow;
use App\Http\Livewire\Tutor\Show as TutorShow;
use App\Http\Livewire\Pupil\Show as PupilShow;
use App\Http\Livewire\Subscription\Show as SubscriptionShow;
use App\Http\Livewire\Subscription\Edit as SubscriptionEdit;
use App\Http\Livewire\SettingShow;
use App\Models\Pupil;
use App\Models\Subscription;
use App\Models\Tutor;
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
    return view('dashboard', [
        'nbr_pupils' => Pupil::count(),
        'nbr_tutors' => Tutor::count(),
        'nbr_subscriptions' => Subscription::count(),
    ]);
})->name('dashboard');

Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {
    Route::group(['middleware' => ['auth', 'verified']], function () {
        Route::get('/tutors', TutorShow::class)->name('tutor.list');
        Route::get('/pupils', PupilShow::class)->name('pupil.list');
        Route::get('/subscriptions', SubscriptionShow::class)->name('subscription.list');
        Route::get('/subscriptions/{id}', SubscriptionEdit::class)->name('subscription.edit');
        Route::get('/settings', SettingShow::class)->name('settings');
        Route::get('/invoices', InvoiceShow::class)->name('invoice.list');
        Route::get('/regulation', RegulationShow::class)->name('regulation.list');
    });
});
