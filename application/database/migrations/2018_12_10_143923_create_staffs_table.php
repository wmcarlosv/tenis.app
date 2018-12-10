<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('club_id')->unsigned();
            $table->string('charge',100)->nullable(false);
            $table->integer('show_order')->nullable(false);
            $table->string('name',60)->nullable(false);
            $table->string('email',255)->nullable();
            $table->string('phone',25)->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('staffs');
    }
}
