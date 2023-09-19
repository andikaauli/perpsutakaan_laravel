<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now(),
        ])->assignRole('admin');

        User::create([
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now(),
        ])->assignRole('petugas');

        User::create([
            'name' => 'peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now(),
        ])->assignRole('peminjam');
    }
}
