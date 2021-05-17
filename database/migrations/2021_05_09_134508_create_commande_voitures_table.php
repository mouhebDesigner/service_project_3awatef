<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_voitures', function (Blueprint $table) {
            $table->id();
            $table->enum('type_lavage', ['intérieur','extérieur']);
            $table->enum('type_voiture', ['familiale', 'commerciale']);
            $table->text('adresse');
            $table->date('date');
            $table->enum('approuver', ['oui','non'])->nullable();         
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('commande_voitures');
    }
}
