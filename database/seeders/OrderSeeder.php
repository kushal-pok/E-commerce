<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
        public function run(): void
    {
        $user = User::first(); // seed orders for first user

        if (!$user) {
            $user = User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('password'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            Order::create([
                'user_id' => $user->id,
                'order_number' => 'ORD00' . $i,
                'total' => rand(1000, 3000),
                'status' => collect(['Processing', 'On the Way', 'Delivered'])->random(),
            ]);
        }
    }
    }

