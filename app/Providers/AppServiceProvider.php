<?php

namespace App\Providers;

use App\View\Components\Invoice\InvoiceContent;
use App\View\Components\Invoice\ReceiptContent;
use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Carbon::setLocale(config('app.locale')); // fr_FR
        Blade::component('invoice-content', InvoiceContent::class);
        Blade::component('receipt-content', ReceiptContent::class);
    }
}
