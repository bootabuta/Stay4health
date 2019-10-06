<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('url');
            $table->string('description');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('img_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->unsigned();
            $table->foreign('img_id')->references('id')->on('images')->unsigned();
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
        Schema::dropIfExists('videos');
    }
}
