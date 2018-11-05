<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('payment_method_id')->unsigned();
            $table->float('amount')->nullable(false);
            $table->timestamp('payment_date')->nullable(false);
            $table->boolean('status')->nullable(false);
            $table->string('attachment',100)->nullable(false);
            $table->string('reference_number',100)->nullable(false);
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
