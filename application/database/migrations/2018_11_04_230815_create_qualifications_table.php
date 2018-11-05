<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('championship_id')->unsigned();
            $table->integer('user_player_id')->unsigned();
            $table->integer('star')->nullable(false)->default(0);
            $table->string('comment',255)->nullable(true);
            $table->timestamps();

            $table->foreign('championship_id')->references('id')->on('championships')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('user_player_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualifications');
    }
}
