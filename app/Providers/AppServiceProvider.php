<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use App\Mixine\StrMixine;

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
        // define macros separates in class
        Str::mixin(new StrMixine);

        // Str::macro('sumOfTwoNumbers' , function ($num1 , $num2) { 
        //     return $num1 + $num2;
        // });
    }
}
