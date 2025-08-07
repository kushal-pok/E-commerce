<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
    ['email' => 'kushalpokhrel027@gmail.com'],  // match condition
    [
        'name' => 'Test User',
        'email_verified_at' => now(),
        'password' => Hash::make('kushal1234'), // update password
        'remember_token' => Str::random(10),
        'role' => 'admin' // if you have this column
    ]
);
    }
}
