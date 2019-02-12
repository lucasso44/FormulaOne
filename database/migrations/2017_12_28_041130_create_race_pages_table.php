<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('raceId')->unsigned()->default(0);
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->longtext('content')->nullable();
            $table->string('video')->nullable();
            $table->string('poster1')->nullable();
            $table->string('poster2')->nullable();
            $table->string('poster3')->nullable();
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
        Schema::dropIfExists('race_pages');
    }
}
