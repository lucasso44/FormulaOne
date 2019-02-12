<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('constructorId')->unsigned()->default(0);
            $table->integer('driverId')->unsigned()->default(0);
            $table->integer('raceId')->unsigned()->default(0);
            $table->string('title')->nullable();
            $table->string('teaser')->nullable();
            $table->string('tagline')->nullable();
            $table->string('description')->nullable();
            $table->longtext('content')->nullable();
            $table->string('image')->nullable();
            $table->string('thumbnail')->nullable();
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
        Schema::dropIfExists('video_pages');
    }
}
