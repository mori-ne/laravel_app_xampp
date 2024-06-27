<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Input;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InputsFactory extends Factory
{
    protected $model = Input::class;

    public function definition(): array
    {
        return [
            'input_name' => $this->faker->realText(10),
            'type' => $this->faker->unixTime(),
            'project_author' => $this->faker->name(),
        ];
    }
}
