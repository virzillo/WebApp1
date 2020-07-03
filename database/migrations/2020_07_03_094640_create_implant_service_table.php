<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImplantServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('implant_service', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('implant_id');
            $table->unsignedBigInteger('service_id');

            $table->foreign('implant_id')->references('id')
                ->on('implants')->onDelete('cascade');
            $table->foreign('service_id')->references('id')
                ->on('services')->onDelete('cascade');

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
        Schema::dropIfExists('implant_service');
    }
}
