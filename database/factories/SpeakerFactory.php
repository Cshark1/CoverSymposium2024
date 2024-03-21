<?php

namespace Database\Factories;

use App\Models\Speaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SpeakerFactory extends Factory
{
    protected $model = Speaker::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
            'link' => $this->faker->word(),
            'organisation' => $this->faker->word(),
            'organisation_url' => $this->faker->url(),
            'image' => $this->faker->word(),
        ];
    }
}
