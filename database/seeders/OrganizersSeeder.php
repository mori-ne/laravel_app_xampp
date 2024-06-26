<?php

namespace Database\Seeders;

use App\Models\Organizer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organizer::factory()->count(50)->create();
    }
}