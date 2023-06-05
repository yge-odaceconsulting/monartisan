<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Assurance;
use App\Models\Claim;
use App\Models\Type;

class ClaimFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Claim::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'email' => $this->faker->safeEmail,
            'contact_1' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'contact_2' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'place' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'date' => $this->faker->date(),
            'description' => $this->faker->text,
            'assurance_id' => Assurance::factory(),
            'type_id' => Type::factory(),
        ];
    }
}
