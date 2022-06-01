<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::where('role_id',Role::$ADMIN)->count();
        if($users==0)
            \App\Models\User::create([
                'username'=>"ADMIN",
                'first_name'=>"ADMIN",
                'last_name'=>"ADMIN",
                'role_id'=>"2",
                'email'=>env('DEFAULT_EMAIL'),
                'email_verified_at'=>date("Y-m-d h:i:s"),
                'password'=>bcrypt(env('DEFAULT_PASSWORD'))
            ]);
    }
}
