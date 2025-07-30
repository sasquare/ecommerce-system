<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed users
        User::create([
            'username' => 'admin',
            'role' => 'admin'
        ]);
        User::create([
            'username' => 'user',
            'role' => 'user'
        ]);

        // Seed products
        Product::create([
            'name' => 'Laptop',
            'price' => 999.99,
            'quantity' => 10,
            'outOfStock' => false
        ]);
        Product::create([
            'name' => 'Phone',
            'price' => 499.99,
            'quantity' => 5,
            'outOfStock' => false
        ]);
    }
}