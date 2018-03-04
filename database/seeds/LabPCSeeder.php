<?php

use Illuminate\Database\Seeder;

class LabPCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labpc')->insert([
            'pc_name'=>'PC-1',
            'ip_address'=>'192.168.221.222',
            'in_use'=>'201255223'
        ]);

        DB::table('labpc')->insert([
            'pc_name'=>'PC-2',
            'ip_address'=>'192.168.221.221',
            'in_use'=>'201253333'
        ]);
    }
}
