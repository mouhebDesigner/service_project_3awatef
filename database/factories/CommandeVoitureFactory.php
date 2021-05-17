<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\CommandeVoiture;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeVoitureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommandeVoiture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "type_lavage" => $this->faker->randomElement(['intérieur','extérieur']),
            "type_voiture" => $this->faker->randomElement(['familiale', 'commerciale']),
            "adresse" => $this->faker->word,
            "date" => "2021-05-06",
            "user_id" => User::all()->random()->id,
        ];
    }
}
