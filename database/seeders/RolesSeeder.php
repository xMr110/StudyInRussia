<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (Role::count()==0)
            Role::create(['id'=>'1',"title"=>'USER']);
            Role::create(['id'=>'2',"title"=>'ADMIN']);
    }
}
