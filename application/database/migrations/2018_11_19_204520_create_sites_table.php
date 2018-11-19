<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->string('title',60)->nullable(false);
            $table->string('description',150)->nullable();
            $table->string('tags',255)->nullable();
            $table->string('logo',100)->nullable();
            $table->string('slider_1',100)->nullable();
            $table->string('slider_2',100)->nullable();
            $table->string('slider_3',100)->nullable();
            $table->string('facebook',255)->nullable();
            $table->string('twitter',255)->nullable();
            $table->string('instagram',255)->nullable();
            $table->string('googleplus',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites');
    }
}
