<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use HasFactory;
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->email = "Admin@gmail.com";
        $user->password = "123123";
        $user->save();

        User::factory(10)->create();

    }


}
