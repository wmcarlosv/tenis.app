<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60)->nullable(false);
            $table->text('description')->nullable();
            $table->string('email',100)->nullable();
            $table->string('phone',20)->nullable();
            //Redes sociales
            $table->string('facebook',255)->nullable();
            $table->string('twitter',255)->nullable();
            $table->string('googleplus',255)->nullable();
            $table->string('instagram',255)->nullable();
            $table->string('youtube',255)->nullable();
            //Fin Redes sociales
            $table->integer('city_id')->unsigned();
            $table->string('address',200)->nullable(true);
            $table->string('logo',100)->nullable(true);
            $table->string('cover',100)->nullable(true);
            $table->string('slug',200)->nullable(false);
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubes');
    }
}
