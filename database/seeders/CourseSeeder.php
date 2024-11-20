<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Course::factory()
            ->count(10)
            ->has(Lesson::factory()->count(20))
            ->create();
    }
}
