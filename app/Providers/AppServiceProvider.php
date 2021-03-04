<?php

namespace App\Providers;

use App\Models\Slug;
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
        $slugs = Slug::where('widget','!=','addcontract')->get();
        view()->share(['slugs' => $slugs]);
    }
}
