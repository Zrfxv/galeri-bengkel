<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Support\Str;
use Faker\Provider\Fakecar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new Fakecar($this->faker));
        return [
            'customer_id' => mt_rand(1, Customer::count()),
            'license_plate' => ('KB ' . mt_rand(1000, 9999) . ' ' . fake()->regexify('[A-Z]{2}')),
            'brand' => $this->faker->vehicleBrand(),
            'model' => $this->faker->vehicleModel(),
            'color' => fake()->safeColorName(),
            'type' => fake()->randomElement(['car', 'moto'])


        ];
    }
}
