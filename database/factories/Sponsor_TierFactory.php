<?php

namespace Database\Factories;

use App\Models\Sponsor_Tier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class Sponsor_TierFactory extends Factory
{
    protected $model = Sponsor_Tier::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'Name' => $this->faker->name(),
        ];
    }
}
