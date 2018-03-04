<?php

use Carbon\Carbon;
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
            'starttime'=> Carbon::now(),
            'endtime'=> Carbon::now(),
            'student'=>'Joshua Emmanuel',
            'active'=> '0'

        ]);

        DB::table('reservationlog')->insert([
            'res_number'=>'040320180213',
            'pc_name'=>'PC-2',
            'starttime'=> Carbon::now(),
            'endtime'=> Carbon::now(),
            'student'=>'Maria Angela Evangelista',
            'active'=>'0'
        ]);
    }
}
