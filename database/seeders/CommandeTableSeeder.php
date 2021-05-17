<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommandeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Commande::factory(6)->create();
    }
}
