<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->float('note1');
            $table->float('note2');
            $table->float('note3');
            $table->float('moyenne');
            $table->foreignId('id_etudiant')->constrained('etudiants');
            $table->foreignId('id_cours')->constrained('cours');
            $table->timestamps();
        });
}

    public function down()
    {
        Schema::dropIfExists('notes');
    }
};
