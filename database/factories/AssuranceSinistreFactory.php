<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Assurance;
use App\Models\AssuranceSinistre;
use App\Models\Sinistre;

class AssuranceSinistreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AssuranceSinistre::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'assurance_id' => Assurance::factory(),
            'sinistre_id' => Sinistre::factory(),
        ];
    }
}
