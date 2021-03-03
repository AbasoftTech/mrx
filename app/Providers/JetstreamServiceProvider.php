<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use App\Models\NormalUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
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
        $this->configurePermissions();

        // Jetstream::deleteUsersUsing(DeleteUser::class);

        // Fortify::registerView(function () {
        //     return view('signup');
        // });
        // Fortify::loginView(function () {
        //     return view('login');
        // });

        // Fortify::authenticateUsing(function (Request $request) {
            
        //     $mainNumber = $request->main_phone_number . $request->top . $request->middle . $request->below;
        //     $password = $request->password;
        //     dd($mainNumber,$password);
        //     Auth::guard('normal_users')->attempt(['main_phone_number' => $mainNumber, 'password' => $password]);
            
        // });
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
