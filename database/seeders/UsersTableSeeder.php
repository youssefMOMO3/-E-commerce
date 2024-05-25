<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'avatar'=>"",
            'email' => 'johndoe@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12341234'),
            'role' => 'client',
            'status' => 'active',
            'phone'=>'+21266557788',
            'adriss'=>'fes Adarissa block c',
            'city'=>'fes',
            'contry'=>'Morocco',
            'pinecode'=>'30030',

            'bithdate'=>'24/09/1999',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more seed data if needed
        DB::table('users')->insert([
            'name' => 'John Doe',
            'avatar'=>"",
            'email' => 'johndoe1@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12341234'),
            'role' => 'client',
            'status' => 'active',
            'phone'=>'+21266557788',
            'adriss'=>'fes Adarissa block c',
            'city'=>'fes',
            'contry'=>'Morocco',
            'pinecode'=>'30030',

            'bithdate'=>'24/09/1999',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe2@example.com',
            'avatar'=>"",
            'email_verified_at' => now(),
            'password' => Hash::make('12341234'),
            'role' => 'admin',
            'status' => 'active',
            'phone'=>'+21266557788',
            'adriss'=>'fes Adarissa block c',
            'city'=>'fes',
            'contry'=>'Morocco',
            'pinecode'=>'30030',

            'bithdate'=>'24/09/1999',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe3@example.com',
            'avatar'=>"",
            'email_verified_at' => now(),
            'password' => Hash::make('12341234'),
            'role' => 'admin',
            'status' => 'desactive',
            'phone'=>'+21266557788',
            'adriss'=>'fes Adarissa block c',
            'city'=>'fes',
            'contry'=>'Morocco',
            'pinecode'=>'30030',

            'bithdate'=>'24/09/1999',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // ...
    }
}
