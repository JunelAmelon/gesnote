<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {// Désactiver les contraintes de clé étrangère
DB::statement('SET FOREIGN_KEY_CHECKS=0');

        Schema::create('cour_etudiants', function (Blueprint $table) {
    $table->unsignedBigInteger('cour_id');
    $table->unsignedBigInteger('etudiant_id');
    $table->float('note1')->nullable();
    $table->float('note2')->nullable();
    $table->float('note3')->nullable();
    $table->timestamps();

    $table->foreign('cour_id')->references('id')->on('cours')->onDelete('cascade');
    $table->foreign('etudiant_id')->references('id_etu')->on('etudiants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cour_etudiants');
    }
};
