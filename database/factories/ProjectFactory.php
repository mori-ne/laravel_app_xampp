<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'project_name' => $this->faker->unique()->streetName() . 'プロジェクト',
            'project_description' => $this->faker->realText(),
            'project_author' => $this->faker->name(),
        ];
    }
}
