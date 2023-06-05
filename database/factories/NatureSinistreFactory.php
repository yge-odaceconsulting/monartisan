<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Nature;
use App\Models\NatureSinistre;
use App\Models\Sinistre;

class NatureSinistreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NatureSinistre::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nature_id' => Nature::factory(),
            'sinistre_id' => Sinistre::factory(),
        ];
    }
}
