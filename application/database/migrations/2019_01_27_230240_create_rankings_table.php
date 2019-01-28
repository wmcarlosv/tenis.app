<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rankings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('championship_id')->unsigned();
            $table->integer('player_category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('points');
            $table->timestamps();

            $table->foreign('championship_id')->references('id')->on('championships')->onUpdate("restrict")->onDelete("restrict");
            $table->foreign('player_category_id')->references('id')->on('player_categories')->onUpdate("restrict")->onDelete("restrict");
            $table->foreign('user_id')->references('id')->on('users')->onUpdate("restrict")->onDelete("restrict");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rankings');
    }
}
