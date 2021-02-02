<?php

namespace App\Actions\Fortify;

use App\Models\NormalUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $getNumber = $input['prefix'] . $input['top'] . $input['middle'] . $input['below'];
        
        $input['main_phone_number'] = $getNumber;
        
        Validator::make($input, [
            'fullname' => ['required', 'string', 'max:255'],
            'check'=>['required'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'main_phone_number' => ['required', 'string', 'max:255', 'unique:normal_users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return NormalUser::create([
            'fullname' => $input['fullname'],
            'main_phone_number' => $input['main_phone_number'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
