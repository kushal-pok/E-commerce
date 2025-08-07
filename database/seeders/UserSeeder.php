<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        'name' => 'Anil Pokhrel',
        'email' => 'pokhrelkushal28@gmail.com',
        'password' => Hash::make('12345678'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    User::create([
    'name' => 'Admin',
    'email' => 'admin@example.com',
    'password' => bcrypt('admin123'),
    'role' => 'admin'
]);
    }
}
