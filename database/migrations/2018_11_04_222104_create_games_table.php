<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('championship_id')->unsigned();
            $table->date('game_date')->nullable(false);
            $table->integer('user_player_1_id')->unsigned();
            $table->integer('user_player_2_id')->unsigned();
            $table->integer('user_player_winner_id')->nullable(true);
            $table->integer('player_category_id')->unsigned();
            $table->timestamps();

            $table->foreign('championship_id')->references('id')->on('championships')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('user_player_1_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('user_player_2_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('player_category_id')->references('id')->on('player_categories')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
