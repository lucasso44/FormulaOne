<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('constructorId')->unsigned()->default(0);
            $table->string('title');
            $table->string('teaser');
            $table->string('tagline');
            $table->string('description');
            $table->longtext('content');
            $table->string('image');
            $table->string('thumbnail');

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
        Schema::dropIfExists('team_pages');
    }
}
