<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();

            $table->foreignId('category_id')->constrained('categories');

            $table->foreignId('service_id')->constrained('services');


            $table->string('titolo');
            $table->string('descrizione')->nullable();
            $table->text('testo')->nullable();
            $table->string('immagine')->nullable();
            $table->string('slug')->index();

            $table->string('meta_titolo')->nullable();
            $table->string('meta_descrizione')->nullable();
            $table->string('meta_keywords')->nullable();

            $table->enum('pubblicato',['si','no'])->default('no');
            $table->enum('evidenza',['si','no'])->default('no');

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
        Schema::dropIfExists('projects');
    }
}
