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


            $table->foreignId('user_id')->constrained();

            $table->foreignId('category_id')->constrained('post_categories');

            $table->string('titolo');
            $table->text('descrizione')->nullable();
            $table->text('testo')->nullable();
            $table->string('immagine')->nullable();
            $table->string('slug')->index();
            $table->enum('pubblicato',['on',NULL])->nullable();
            $table->enum('evidenza',['on',NULL])->nullable();

            $table->string('meta_titolo')->nullable();
            $table->string('meta_descrizione')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->integer('views');
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
