<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255)->nullable(false);
            $table->string('slug',255)->nullable(false);
            $table->text('content')->nullable(true);
            $table->string('avatar',100)->nullable(true);
            $table->integer('user_id')->unsigned();
            $table->timestamp('publisher_date')->nullable(false);
            $table->enum('status',['draf','publisher'])->default('draf');
            $table->integer('notice_category_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('notice_category_id')->references('id')->on('notice_categories')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notices');
    }
}
