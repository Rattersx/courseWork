<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
