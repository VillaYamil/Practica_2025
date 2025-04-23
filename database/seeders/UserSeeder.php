<?php

namespace Database\Seeders;

use App\Models\User; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Villa Yamil';
        $user->email = 'yamil.gchu@gmail.com';
        $user->password = bcrypt('12345678');

        $user->save();

        User::factory(10)->create();
    
    }
}

/*$user = new User();

        $user->name = 'Villa Andres';
        $user->email = 'willy.gchu@gmail.com';
        $user->password = bcrypt('12345678');

        $user->save();*/