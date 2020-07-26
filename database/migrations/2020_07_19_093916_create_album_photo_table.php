<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_photo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('album_id')->unsigned();
                $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
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
        Schema::dropIfExists('album_photo');
    }
}
