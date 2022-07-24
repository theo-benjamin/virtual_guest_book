<?php

namespace App\Providers;

use App\Models\VirtualGuestBook;
use App\Observers\VirtualGuestBookObserver;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        /**
         * Disabling sanctum database migration.Will not be doing API authentication
         */

         Sanctum::ignoreMigrations();
         //Register Observer
         VirtualGuestBook::observe(VirtualGuestBookObserver::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
