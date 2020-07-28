<?php

use Illuminate\Database\Seeder;

class PhotoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photo_user')->insert([
        	['user_id'=>1,'photo_id'=>1],
        	['user_id'=>1,'photo_id'=>2],
        	['user_id'=>1,'photo_id'=>6],
        	['user_id'=>2,'photo_id'=>3],
        	['user_id'=>2,'photo_id'=>4],
        	['user_id'=>3,'photo_id'=>1],
        	['user_id'=>4,'photo_id'=>4],
        	['user_id'=>4,'photo_id'=>2],
        	['user_id'=>5,'photo_id'=>4],
        	['user_id'=>6,'photo_id'=>2],
        	['user_id'=>6,'photo_id'=>5],
        	['user_id'=>6,'photo_id'=>1],
        	['user_id'=>6,'photo_id'=>3],
        ]);
         
    }
}
