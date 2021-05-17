<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Catalogue::factory(6)->create();
        \App\Models\Service::factory(6)->create();
        \App\Models\Commande::factory(6)->create();
        \App\Models\CommandeVoiture::factory(6)->create();
    }
}
