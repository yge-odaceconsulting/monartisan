<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Nature;

class NatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nature::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'wording' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'description' => $this->faker->text,
        ];
    }
}
