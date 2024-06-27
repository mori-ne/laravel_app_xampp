<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Input;

class InputsSeeder extends Seeder
{
    public function run(): void
    {
        Input::factory()->count(50)->create();
    }
}
