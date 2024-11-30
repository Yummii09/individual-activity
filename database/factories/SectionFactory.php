<?php

namespace Database\Factories;

use App\Models\Player;
use App\Models\Section;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    
    protected $model = Section::class;

    public function definition(): array
    {
        return [
            'player_id' => Player::factory(), 
            'section_name' => $this->faker->word,
        ];
    }
}
