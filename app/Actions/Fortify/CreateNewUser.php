<?php

namespace App\Actions\Fortify;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
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

        // $request->validate([
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
        //     // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        DB::beginTransaction();
        // try{
            Validator::make($input, [
                // 'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            ])->validate();

            $user = User::create([
                'name' => $input['firstname'] . " " . $input['lastname'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]);
            $profile = new Profile();
            $profile->title = $input['title'];
            $profile->firstname = $input['firstname'];
            $profile->lastname = $input['lastname'];
            $profile->email = $input['email'];
            $profile->phone_number = $input['phone_number'];
            $profile->age_group = $input['age_group'];
            $profile->gender = $input['gender'];
            $profile->city = $input['city'];
            $profile->zip_code = $input['zip_code'];
            $profile->address = $input['address'];
            $profile->profession = $input['profession'];
            // $profile->chapter ='';
            $profile->user()->associate($user);
            $profile->save();

            $user->assignRole('user');

            DB::commit();

            return $user;
            // return redirect()->route('home');

        // }catch(\Exception $e){
        //     DB::rollBack();
        //     Log::alert($e);

        // }
        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        // Validator::make($input, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => $this->passwordRules(),
        //     'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        // ])->validate();

        // return User::create([
        //     'name' => $input['name'],
        //     'email' => $input['email'],
        //     'password' => Hash::make($input['password']),
        // ]);
    }
}
