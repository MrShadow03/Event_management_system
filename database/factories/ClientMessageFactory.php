<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClientMessage>
 */
class ClientMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $phoneNumber = str_replace(['(', ')', '-', ' '], '', $this->faker->phoneNumber());
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'subject' => $this->faker->sentence(),
            'message' => $this->faker->paragraph(),
            'phone_number' => $phoneNumber,
            'is_unread' => $this->faker->boolean(),
            'is_important' => $this->faker->boolean(),
            'created_at' => $this->faker->dateTimeBetween('-3 day', 'now'),
        ];
    }
}
