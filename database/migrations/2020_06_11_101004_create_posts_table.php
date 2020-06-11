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


            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedInteger('service_id');
            $table->foreign('service_id')->references('id')->on('categories')->onDelete('cascade');

            $table->string('titolo');
            $table->string('descrizione')->nullable();;
            $table->text('testo')->nullable();;
            $table->string('immagine')->nullable();;
            $table->string('slug')->index();
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
        Schema::dropIfExists('posts');
    }
}
