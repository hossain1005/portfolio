<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Food Waste Management System',
            'description' => 'A platform that connects restaurants with NGOs to reduce food waste.',
            'tech_stack' => 'Laravel, MySQL, Bootstrap',
            'github_link' => 'https://github.com/your-username/food-waste-system',
            'demo_link' => null,
        ]);

        Project::create([
            'title' => 'Personal Portfolio Website',
            'description' => 'My personal portfolio built with Laravel.',
            'tech_stack' => 'Laravel, HTML, CSS',
            'github_link' => 'https://github.com/your-username/my-portfolio',
            'demo_link' => null,
        ]);
    }
}
