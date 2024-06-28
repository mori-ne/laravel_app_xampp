<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Organizer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organizer>
 */
class OrganizerFactory extends Factory
{
    protected $model = Organizer::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'creator' => $this->faker->name(),
            'creator_kana' => $this->faker->name(),
            'email' => $this->faker->email(),
        ];
    }
}
