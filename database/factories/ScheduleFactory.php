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
        $s_time = Carbon::now()->addHours(rand(9, 20));
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => $this->faker->sentence(),
            'speaker' => $this->faker->name(),
            'link' => $this->faker->address(),
            'start_time' => $s_time,
            'end_time' => $s_time->addHours(1),
        ];
    }
}
