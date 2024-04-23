<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'email' => 'admin@verysimple.org',
            'password' => Hash::make('Sup3r@dm!n'),
            "name"=>"Super Admin",
            "email_verified_at"=>\Carbon\Carbon::now(),
            'type'=>'admin'
        ]);
        $user->assignRole('admin');
    }
}
