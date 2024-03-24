<?php


namespace App\Http\Services;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserService {
    public function create($request){
        try{
            $user=$this->getViaEmail($request->email);
            Log::alert($request);
            if(!isset($user->id)){
                $user = User::create([
                    'name' => $request->firstname . " " . $request->lastname,
                    'email' => $request->email,
                    'password' => Hash::make('Password@1'),
                ]);
                $profile=Profile::create($request->all());

                $profile->user_id=$user->id;
                $profile->save();
                $user->assignRole('user');
            }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function get(){
        try{

        }catch(\Exception $e){

        }
    }

    public function getViaEmail($email){
        try{
            return User::where('email', $email)->first();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
?>
