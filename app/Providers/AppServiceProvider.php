<?php

namespace App\Providers;

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
        $this->app->validator->extendImplicit('alfabeticos_te', function ($attribute, $value, $parameters) {
           return preg_match("/^[a-zA-Z_ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÑÒÓÔÕÖØÙÚÛÜàáâãäåèéêëìíîïðñòóôõöùúûüýøþÿÐdŒ\s]+$/",$value);
        }, 'este campo solo puede contener caracteres alfabeticos, tildes o espacios');
    
    }
}
