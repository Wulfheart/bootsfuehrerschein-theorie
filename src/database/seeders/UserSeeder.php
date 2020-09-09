<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "test";
        $user->email = "test@test.de";
        $user->password = bcrypt("123");
        $user->save();
        
        
    }
}
