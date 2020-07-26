<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('photo_id')->unsigned();
                $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
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
        Schema::dropIfExists('photo_user');
    }
}
