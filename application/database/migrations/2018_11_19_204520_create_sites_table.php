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
            $table->text('description')->nullable();
            $table->string('tags',255)->nullable();
            $table->string('logo',100)->nullable();

            $table->string('slider_1',100)->nullable();
            $table->string('slider_1_title',65)->nullable();
            $table->string('slider_1_subtitle',130)->nullable();
            $table->string('slider_1_link',255)->nullable();

            $table->string('slider_2',100)->nullable();
            $table->string('slider_2_title',65)->nullable();
            $table->string('slider_2_subtitle',130)->nullable();
            $table->string('slider_2_link',255)->nullable();

            $table->string('slider_3',100)->nullable();
            $table->string('slider_3_title',65)->nullable();
            $table->string('slider_3_subtitle',130)->nullable();
            $table->string('slider_3_link',255)->nullable();

            $table->string('facebook',255)->nullable();
            $table->string('twitter',255)->nullable();
            $table->string('linkedin',255)->nullable();
            $table->string('googleplus',255)->nullable();
            $table->string('vimeo',255)->nullable();
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
