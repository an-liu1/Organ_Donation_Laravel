<?php

use Illuminate\Database\Seeder;

class RedeemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('redeem') -> insert([
            'name' => 'JOHN SMITH',
            'points' => '200',
            'products' => 'PEN',
            'redeem_time' => date('H-m-d H:i:s'),
        ]);
        DB::table('redeem') -> insert([
            'name' => 'BILL JONES',
            'points' => '600',
            'products' => 'T-SHIRT',
            'redeem_time' => date('H-m-d H:i:s'),
        ]);
        DB::table('redeem') -> insert([
            'name' => 'MARY JAMES',
            'points' => '1200',
            'products' => ' EMERGENCY ALERT',
            'redeem_time' => date('H-m-d H:i:s'),
        ]);

    }
}
