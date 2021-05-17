<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Service;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commande::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "espace" => "150.23",
            "adresse" => $this->faker->word,
            "num_etage" => $this->faker->randomElement(['1','2', '3', '4', '5']),
            "date" => "2021-05-06",
            "user_id" => User::all()->random()->id,
            "service_id" => Service::all()->random()->id,
        ];
    }
}
