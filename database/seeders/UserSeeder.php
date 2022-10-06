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
        User::create([
            'name'=>'eduardo',
            'email'=>'eduardoroa22@gmail.com',
            'password'=>bcrypt('19134072')
        ])->assignRole('Admin');    
        User::factory(59)->create();
    }
}
