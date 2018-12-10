<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->unsigned();
            $table->integer('club_id')->unsigned();
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('club_id')->references('id')->on('clubes')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club_services');
    }
}
