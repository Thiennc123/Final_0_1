<?php

use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('photos')->insert([
        	['link'=>'vidu.jpg','title'=>'photo 1','discript'=>'this is the photo 1','status'=>'public'],
            ['link'=>'vidu.jpg','title'=>'photo 2','discript'=>'this is the photo 2','status'=>'public'],
            ['link'=>'vidu.jpg','title'=>'photo 3','discript'=>'this is the photo 3','status'=>'public'],
            ['link'=>'vidu.jpg','title'=>'photo 4','discript'=>'this is the photo 4','status'=>'public'],
            ['link'=>'vidu.jpg','title'=>'photo 5','discript'=>'this is the photo 5','status'=>'public'],
            ['link'=>'vidu.jpg','title'=>'photo 6','discript'=>'this is the photo 6','status'=>'public'],
            ['link'=>'vidu.jpg','title'=>'photo 7','discript'=>'this is the photo 7','status'=>'public'],
            ['link'=>'vidu.jpg','title'=>'photo 8','discript'=>'this is the photo 8','status'=>'public'],
        ]);
    }
}
