<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id');
            $table->foreignId('service_id');
            $table->foreignId('info_id');


            $table->string('titolo');
            $table->string('descrizione')->nullable();;
            $table->text('testo')->nullable();;
            $table->string('immagine')->nullable();;
            $table->string('slug');
            $table->enum('pubblicato',['si','no']);
            $table->enum('evidenza',['si','no']);

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
        Schema::dropIfExists('posts');
    }
}
