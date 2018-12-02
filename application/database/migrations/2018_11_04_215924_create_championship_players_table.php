<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionshipPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('championship_players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('championship_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('payment_id')->unsigned();
            $table->integer('player_category_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('championship_id')->references('id')->on('championships')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('payment_id')->references('id')->on('payments')->onUpdate('restrict')->onDelete('restrict');
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
        Schema::dropIfExists('championship_players');
    }
}
