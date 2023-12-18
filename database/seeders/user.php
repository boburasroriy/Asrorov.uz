<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Foundation\Auth\User::create([
            'name'=> 'Manager',
            'role_id'=>1,
            'email' => 'Boburasrorov2005@gmail.com',
            'password' =>Hash::make('B1234a1234'),

        ]);


    }
}
