<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requetes', function (Blueprint $table) {
            $table->id();

            // $table->bigInteger('id_etd')->unsigned()->index()->nullable();
            // $table->bigInteger('id_prof')->unsigned()->index()->nullable();

            $table->string('matricule');
            $table->string('nom');
            $table->string('filiere');
            $table->string('matiere');
            $table->string('object');
            $table->string('file');
            $table->integer('etat');
            //Pour les requetes rediriger, l
            //0 Pour les requetes non verifier
            //1 Pour les requetes verifier et valider
            //2 Pour les requetes verifier et regeter
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
        Schema::dropIfExists('requetes');
    }
};
