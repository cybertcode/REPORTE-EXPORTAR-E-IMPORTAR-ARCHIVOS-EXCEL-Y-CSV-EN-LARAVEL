<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Invoice;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'MKEVYN HH',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ]);
        \App\Models\User::factory(10)->create();
        Invoice::factory(100)->create();

    }
}
