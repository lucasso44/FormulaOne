<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDriverPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('driverId')->unsigned()->default(0);
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->longtext('content')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('driver_pages');
    }
}
