<?php

use Illuminate\Database\Seeder;

class AlbumPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album_photos')->insert([
        	['album_id'=>1,'photo_id'=>1],
        	['album_id'=>1,'photo_id'=>2],
        	['album_id'=>1,'photo_id'=>6],
        	['album_id'=>2,'photo_id'=>3],
        	['album_id'=>2,'photo_id'=>4],
        	['album_id'=>3,'photo_id'=>1],
        	['album_id'=>4,'photo_id'=>4],
        	['album_id'=>4,'photo_id'=>2],
        	['album_id'=>5,'photo_id'=>4],
        	['album_id'=>6,'photo_id'=>2],
        	['album_id'=>6,'photo_id'=>5],
        	['album_id'=>6,'photo_id'=>1],
        	['album_id'=>6,'photo_id'=>3],
        ]);
    }
}
