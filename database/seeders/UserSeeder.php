<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat user admin jika belum ada
        if (DB::table('users')->where('email', 'admin@gmail.com')->doesntExist()) {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('suhu1234'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Buat beberapa user biasa jika belum ada
        $users = [
            [
                'name' => 'Wahyu',
                'email' => 'WahyuSaofi01@gmail.com',
                'password' => Hash::make('BrayenLiwong01'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nico',
                'email' => 'NicoArdiansyah@gmail.com',
                'password' => Hash::make('Nico12345'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($users as $user) {
            if (DB::table('users')->where('email', $user['email'])->doesntExist()) {
                DB::table('users')->insert($user);
            }
        }
    }
}
