<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        if($input["type"] === "update_social"){
            $validator = Validator::make($input, [
                'facebook' => ['nullable','url','string', 'max:255'],
                'twitter' => ['nullable','url','string', 'max:255'],
                'linkedin' => ['nullable','url','string', 'max:255'],
                'instagram' => ['nullable','url','string', 'max:255'],
            ]);
            $validated = $validator->validated();
            $user->profile()->update(['facebook' => $validated["facebook"],'twitter' => $validated["twitter"],'linkedin' => $validated["linkedin"],'instagram' => $validated["instagram"]]);
            return redirect()->route("dashboard")->with("success","berhasil update social profile");
        }elseif($input["type"] === "update_password"){
            $validator = Validator::make($input, [
                'password' => ['required','confirmed'],
            ]);
            $validated = $validator->validated();
            $user->update(["password" => Hash::make($validated["password"])]);
            return redirect()->route("dashboard")->with("success","berhasil update password");
        }else{
            $validator = Validator::make($input, [
                'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
                'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
                'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
                // 'thumb' => ['nullable', 'image', 'max:255'],
                'resume' => ['nullable', 'mimes:pdf,doc'],
                'first_name' => ['nullable', 'string', 'max:255'],
                'last_name' => ['nullable', 'string', 'max:255'],
                'phone' => ['nullable', 'string', 'max:255'],
                'designation' => ['nullable', 'string', 'max:255'],
                'about_me' => ['nullable', 'string', 'max:255'],
                'country_id' => ['nullable', 'string', 'max:255'],
                'province' => ['nullable', 'string', 'max:255'],
                'city' => ['nullable', 'string', 'max:255'],
                'address' => ['nullable', 'string', 'max:255'],
                'skype' => ['nullable', 'string', 'max:255'],
                'whatapp' => ['nullable', 'string', 'max:255'],
            ]);
            $validated = $validator->validated();

            if (isset($validated['photo'])) {
                $user->updateProfilePhoto($validated['photo']);
            }
            
            if (isset($validated['resume'])) {
                $photo = $validated['resume'];
                tap($user->profile->thumb, function ($previous) use ($photo,$user) {
                    $user->profile->forceFill([
                        'thumb' => $photo->storePublicly(
                            'resume_doc', ['disk' => "public"]
                        ),
                    ])->save();
        
                    if ($previous) {
                        Storage::disk("public")->delete($previous);
                    }
                });
                $image = $validated["resume"]->store("resume_file","public");
            }
    
            if ($validated['email'] !== $user->email &&
                $user instanceof MustVerifyEmail) {
                $this->updateVerifiedUser($user, $validated);
            } else {
                $user->update([
                    'username' => $validated['username'],
                    'email' => $validated['email'],
                ]);
                $user->profile()->update(['first_name' => $validated["first_name"],'last_name' => $validated["last_name"],'phone' => $validated["phone"],'designation' => $validated["designation"],'about_me' => $validated["about_me"],'country_id' => $validated["country_id"],'city' => $validated["city"],'address' => $validated["address"],'skype' => $validated["skype"],'whatapp' => $validated["whatapp"],'province' => $validated["province"]]);
                return redirect()->route("dashboard")->with("success","berhasil update profile");
            }
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->update([
            'username' => $input['username'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ]);

        $user->sendEmailVerificationNotification();
    }
}
