<?php

use Illuminate\Database\Seeder;

class DonorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donor') -> insert([
            'last_name' => 'Brauer',
            'first_name' => 'Karl',
            'organ' => 'Corneal',
        ]);
        DB::table('donor') -> insert([
            'last_name' => 'Darvall',
            'first_name' => 'Denise',
            'organ' => 'Heart',
        ]);
        DB::table('donor') -> insert([
            'last_name' => 'Herrick',
            'first_name' => 'Ronald',
            'organ' => 'Kidney',
        ]);
        DB::table('donor') -> insert([
            'last_name' => 'Abidal',
            'first_name' => 'Eric',
            'organ' => 'Liver',
        ]);
        DB::table('donor') -> insert([
            'last_name' => 'Harrison',
            'first_name' => 'Ann',
            'organ' => 'Lung',
        ]);

        $faker = Faker\Factory::create();

        $data = [];
        for($i=0;$i<100;$i++){
            $data[] = [
                'last_name' => $faker -> lastName,
                'first_name' => $faker -> firstName,
                'organ'  => array('Corneal','Eye','Ear','Liver','Heart','Lung','Kidney')[array_rand(array('Corneal','Eye','Ear','Liver','Heart','Lung','Kidney'))],
            ];
        }
        DB::table('donor') -> insert($data);
    }
}
