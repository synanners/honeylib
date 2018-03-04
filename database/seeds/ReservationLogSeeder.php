<?php

use Illuminate\Database\Seeder;

class ReservationLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservationlog')->insert([
            'res_number'=>'040320180001',
            'pc_name'=>'PC-1',
            'starttime'=>'11:22:12',
            'endtime'=>'13:22:12',
            'student'=>'Joshua Emmanuel',
            'active'=> '0'

        ]);

        DB::table('reservationlog')->insert([
            'res_number'=>'040320180213',
            'pc_name'=>'PC-2',
            'starttime'=>'08:22:12',
            'endtime'=>'09:22:12',
            'student'=>'Maria Angela Evangelista',
            'active'=>'0'

        ]);
    }
}
