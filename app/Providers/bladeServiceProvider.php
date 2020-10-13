<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class bladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('recaptcha', function () {
            return "
            <script src=\"https://www.google.com/recaptcha/api.js?hl=fa\" async defer></script>
            <div class=\"g-recaptcha form-footer text-right mt-3\" data-sitekey=\"{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}\">
             </div>
            
            ";
        });
    }
}
