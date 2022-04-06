<?php

namespace App\Actions\Fortify;

use App\Models\Feature;
use App\Models\FeatureGroup;
use App\Models\Profile;
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
        Validator::make($input, [
            'username' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'first_name' => ['required', 'string','max:255'],
            'last_name' => ['required', 'string','max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

         return tap(User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]),function($user) use($input) {
            $profile = new Profile(['first_name' => $input['first_name'],'last_name' => $input['last_name']]);
            $public = new FeatureGroup(['name' => "Public","active" => 1,"description" => "Dont delete this"]);
            $group = $user->groups()->save($public);
            $group->features()->attach([5,14]);
            $user->profile()->save($profile);
        });
    }
}
