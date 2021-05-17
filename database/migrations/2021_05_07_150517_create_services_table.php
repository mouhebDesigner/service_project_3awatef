<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->enum('mode', ['interne', 'externe']);
            $table->enum('unité', ['metre', 'place', 'panne', 'consulter']);
            $table->string('prix');
            $table->string('image');
            $table->enum('voiture', ['non', 'oui']);
            $table->text('description')->nullable();
            $table->foreignId('catalogue_id')->constrained('catalogues')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
