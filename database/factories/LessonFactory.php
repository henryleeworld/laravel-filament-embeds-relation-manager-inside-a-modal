<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    protected $model = Lesson::class;

    public function definition(): array
    {
        return [
            'title' => rtrim(fake()->sentence(), "."),
            'content' => fake()->realText(),
            'course_id' => Course::factory(),
        ];
    }
}
