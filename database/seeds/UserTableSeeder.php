<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        $data = [];
        for($i=0;$i<100;$i++){
            $data[] = [
                'username' => $faker -> userName,
                'password' => bcrypt('123456'),
                'name' => $faker -> firstName,
                'tel' => $faker -> tollFreePhoneNumber,
                'email' => $faker -> email,
                'points' => rand(200,20000),
                'last_login_ip' => $faker -> localIpv4,
                'last_login_time' => $faker -> dateTime,
                'created_at' => $faker -> dateTime,
                'status' => rand(1,2),
            ];
        }
        DB::table('user') -> insert($data);
    }
}
