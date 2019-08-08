<?php

use Illuminate\Database\Seeder;

class ManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $data = [];
        for ($i = 0; $i < 25; $i++) {
            $data[] = [
                'username' => $faker -> username,
                'password' => bcrypt('123456'),
                'gender' => rand(1,3),
                'mobile' => $faker -> phoneNumber,
                'email' => $faker -> email,
                'role_id' => rand(1,6),
                'created_at' => date('Y-m-d H:i:s', time()),
            ];
        }

        DB::table('manager') -> insert($data);
    }
}
