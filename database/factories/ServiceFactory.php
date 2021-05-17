<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Catalogue;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->word,
            'mode' => $this->faker->randomElement(['interne', 'externe']),
            'unité' => $this->faker->randomElement(['metre', 'place', 'panne', 'consulter']),
            'prix' => $this->faker->randomElement([35.233, 25, 12.3]),
            'image' => "images/Jcd0RgfbrxnMu0MCEw5NqRVNhYE1wJQHsJiqrwTZ.jpg",
            'catalogue_id' => Catalogue::all()->random()->id,
        ];
    }
}
