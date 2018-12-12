<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',40);
            $table->string('email',100)->unique();
            $table->string('phone',30)->nullable();

            $table->date('birthdate')->nullable();
            $table->text('about')->nullable();
            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->enum('skillful_hand',['left','right'])->nullable();

            //Redes sociales
            $table->string('facebook',255)->nullable();
            $table->string('twitter',255)->nullable();
            $table->string('googleplus',255)->nullable();
            $table->string('instagram',255)->nullable();
            $table->string('youtube',255)->nullable();
            //Fin Redes sociales

            $table->integer('city_id')->unsigned();
            $table->string('address',255)->nullable();
            $table->enum('role',['administrator','operator','player','club_manager'])->nullable(false);
            $table->integer('club_id')->unsigned();
            $table->string('avatar',100)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('status')->default(false);
            $table->integer('player_category_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('club_id')->references('id')->on('clubes')->onUpdate('restrict')->onDelete('restrict');
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
        Schema::dropIfExists('users');
    }
}
