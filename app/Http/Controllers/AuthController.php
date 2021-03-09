<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\NormalUser;
use App\Models\Slug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function getLoged(LoginRequest $request)
    {
      
        $menu = Slug::where('widget','myinfo')->get();
        $url = '';
        foreach ($menu as $m) {
            $url = $m->getTranslatedAttribute('slug');
        }
    
        $mainNumber = $request->main_phone_number . $request->top . $request->middle . $request->below;
            $password = $request->password;
        
        Auth::guard('normal_users')->attempt(['main_phone_number' => $mainNumber, 'password' => $password]);
        return redirect($url);
    }


    public function register()
    {
        return view('signup');
    }

    public function getRegister(RegisterRequest $request)
    {
        
     
      
        $mainNumber = $request->main_phone_number . $request->top . $request->middle . $request->below;
        $password = $request->password;

        NormalUser::create([
            'fullname'=>$request->fullname,
            'password'=>bcrypt($request->password),
            'main_phone_number' => $mainNumber
        ]);

              
        
        Auth::guard('normal_users')->attempt(['main_phone_number' => $mainNumber, 'password' => $password]);
        return redirect()->route('myinfo');
    }

    public function logout()
    {
        Auth::guard('normal_users')->logout();

        return redirect('/');
    }
}
