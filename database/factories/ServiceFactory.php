<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vehicle_id' => mt_rand(1, Vehicle::count()),
            'user_id' => mt_rand(1, User::count()),
            'type' => fake()->randomElement(['ringan', 'berat']),
            'kilometers' => mt_rand(10000, 99999),
            'problem' => fake()->text()
        ];
    }
}
