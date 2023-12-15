<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requete', function (Blueprint $table) {
            $table->id();

            //  $randomCode = strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 1))
            //  . mt_rand(10, 99)
            //  . mt_rand(100, 999); 
            // $generatedCode = $randomCode;
            // $randomCode = $table->input('code');


            $table->string('code');
            $table->string('statut');
            $table->string('categorie');
            $table->string('nom');
            $table->string('prenom');
            $table->string('matricule');
            $table->string('filiere');
            
            $table->timestamps();
            // $table->bigInteger('categorie_id')->unsigned();
            // $table->foreign('categorie_id')->references('id')->on('categorie');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requete');
    }
};
