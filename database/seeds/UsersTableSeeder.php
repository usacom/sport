<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender= ['man', 'woman'];
        $date = mt_rand(0,1104537600);
        DB::table('users')->insert([
            'nickname' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'name'=> str_random(8),
            'last_name'=> str_random(8),
            'phone'=> random_int(100000000, 999999999999999),
            'birthday'=> date("Y-m-d",$date),
            'gender'=> $gender[random_int(0,1)],
            'job'=> str_random(16),
            'length'=> random_int(140, 220),
            'weight'=> random_int(35, 120),
        ]);
    }
}
