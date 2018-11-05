<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('championships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',150)->nullable(false);
            $table->string('description',255)->nullable(false);
            $table->string('cover',100)->nullable();
            $table->date('datefrom')->nullable(false);
            $table->date('dateto')->nullable(false);
            $table->integer('point_to_winner_game')->nullable(false)->defaul(0);
            $table->integer('total_points')->nullable(false)->default(0);
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
        Schema::dropIfExists('championships');
    }
}
