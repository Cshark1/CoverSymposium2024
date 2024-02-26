<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ScheduleFactory extends Factory
{
    protected $model = Schedule::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => $this->faker->word(),
            'speaker' => $this->faker->word(),
            'link' => $this->faker->word(),
            'start_time' => Carbon::now(),
            'end_time' => $this->faker->word(),
        ];
    }
}
