<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Faker\Guesser\Name;
use Faker\Provider\hu_HU\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use SebastianBergmann\Type\ReflectionMapper;

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

        $user = new User();
        $user->username = "ADMIN";
      foreach(\LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
      {
          $user->setTranslation('first_name',$localeCode,"Admin". Str::random(2));
          $user->setTranslation('last_name',$localeCode,"Admin". Str::random(2));

      }

        $user->role_id = 2;
        $user->email = "admin@admin.com";
        $user->email_verified_at = date("Y-m-d h:i:s");
        $user->password = bcrypt(env('DEFAULT_PASSWORD'));
        $user->save();
    }
}
