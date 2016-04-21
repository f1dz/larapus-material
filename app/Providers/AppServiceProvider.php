<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load HTML Macro
        require base_path() . '/app/Helpers/frontend.php';

        // Custom Validator: Check value against current password
        // usage: passcheck:currentpassword
        \Validator::extend('passcheck', function ($attribute, $value, $parameters) {
            return \Hash::check($value, $parameters[0]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
