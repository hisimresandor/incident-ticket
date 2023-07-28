<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sender_id' => $this->faker->numberBetween(1, 4),
            'subject' => $this->faker->text(),
            'content' => $this->faker->realText(),
            'due_date' => $this->faker->dateTimeBetween('now', '+16 hours')
        ];
    }
}
