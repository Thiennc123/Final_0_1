<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['userName'=>'user1','email'=>'user1@gmail.com','firstName'=>'thien1','lastName'=>'nguyen','password'=>bcrypt('123456'),'avatar'=>'vidu.jpg'],
            ['userName'=>'user2','email'=>'user2@gmail.com','firstName'=>'thien2','lastName'=>'nguyen','password'=>bcrypt('123456'),'avatar'=>'vidu.jpg'],
            ['userName'=>'user3','email'=>'user3@gmail.com','firstName'=>'thien3','lastName'=>'nguyen','password'=>bcrypt('123456'),'avatar'=>'vidu.jpg'],
            ['userName'=>'user4','email'=>'user4@gmail.com','firstName'=>'thien4','lastName'=>'nguyen','password'=>bcrypt('123456'),'avatar'=>'vidu.jpg'],
            ['userName'=>'user5','email'=>'user5@gmail.com','firstName'=>'thien5','lastName'=>'nguyen','password'=>bcrypt('123456'),'avatar'=>'vidu.jpg'],
            ['userName'=>'user6','email'=>'user6@gmail.com','firstName'=>'thien6','lastName'=>'nguyen','password'=>bcrypt('123456'),'avatar'=>'vidu.jpg'],
      ]);
    }
}
