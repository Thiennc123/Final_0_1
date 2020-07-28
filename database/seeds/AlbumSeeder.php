<?php

use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
        	['title'=>'photo 1','discript'=>'this is the photo 1','status'=>'public','user_id'=>2],
            ['title'=>'photo 2','discript'=>'this is the photo 2','status'=>'public','user_id'=>2],
            ['title'=>'photo 3','discript'=>'this is the photo 3','status'=>'public','user_id'=>3],
            ['title'=>'photo 4','discript'=>'this is the photo 4','status'=>'public','user_id'=>4],
            ['title'=>'photo 5','discript'=>'this is the photo 5','status'=>'public','user_id'=>2],
            ['title'=>'photo 6','discript'=>'this is the photo 6','status'=>'public','user_id'=>5],
            ['title'=>'photo 7','discript'=>'this is the photo 7','status'=>'public','user_id'=>2],
            ['title'=>'photo 8','discript'=>'this is the photo 8','status'=>'public','user_id'=>3],
        ]);
    }
}
