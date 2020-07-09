<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImplantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('implants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();

            $table->foreignId('category_id')->constrained('categories');


            $table->string('titolo');
            $table->text('descrizione')->nullable();
            $table->text('testo')->nullable();
            $table->string('immagine')->nullable();
            $table->string('slug')->index();

            $table->string('indirizzo')->nullable();
            $table->string('dimensione')->nullable();
            $table->float('prezzo')->nullable();
            $table->float('sconto')->nullable();

            $table->string('provincia')->nullable();
            $table->string('comune')->nullable();

            $table->string('codice')->nullable();
            $table->text('condizioni_pagamento')->nullable();
            $table->text('condizioni_generali')->nullable();

            $table->string('meta_titolo')->nullable();
            $table->string('meta_descrizione')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->integer('views');


            $table->enum('pubblicato',['on',NULL])->nullable();
            $table->enum('evidenza',['on',NULL])->nullable();
            $table->enum('illuminato',['on',NULL])->nullable();

            $table->timestamps();
            $table->timestamp('pubblicato_il')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('implants');
    }
}
