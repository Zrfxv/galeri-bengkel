<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Customer;
use App\Models\Mechanic;
use App\Models\Service;
use App\Models\Vehicle;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Supervisor',
            'username' => 'spv',
            'role' => false,
            'password' => bcrypt('12345')
        ]);

        User::factory(5)->create();
        Customer::factory(50)->create();
        Mechanic::factory(10)->create();
        Vehicle::factory(200)->create();
        Service::factory(500)->create();
    }
}
