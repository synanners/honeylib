<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'student_num'=>'201410223',
            'name'=>'Josea Dimasalang',
            'course'=>'BS CE',
            'timein'=>'10:13:15',
            'timeout'=>'13:22:13',
            'img'=>'https://www.w3schools.com/howto/img_avatar2.png',
            'lastlogin'=>'2018-01-01'
        ]);

        DB::table('students')->insert([
            'student_num'=>'20112223',
            'name'=>'Janna Antonio',
            'course'=>'BS CSSE',
            'timein'=>'14:23:15',
            'timeout'=>'16:22:00',
            'img'=>'https://www.w3schools.com/howto/img_avatar2.png',
            'lastlogin'=>'2018-11-08'
        ]);

        DB::table('students')->insert([
            'student_num'=>'20125523',
            'name'=>'Joshua Emmanuel',
            'course'=>'BS ITDA',
            'timein'=>'11:22:12',
            'timeout'=>'13:22:12',
            'img'=>'https://www.w3schools.com/howto/img_avatar2.png',
            'lastlogin'=>'2017-12-13'
        ]);

        DB::table('students')->insert([
            'student_num'=>'201516121',
            'name'=>'Jaira Dela Cruz',
            'course'=>'BS ITWMA',
            'timein'=>'12:13:12',
            'timeout'=>'14:13:11',
            'img'=>'https://www.w3schools.com/howto/img_avatar2.png',
            'lastlogin'=>'2018-02-14'
        ]);

        DB::table('students')->insert([
            'student_num'=>'20125523',
            'name'=>'Maria Angela Evangelista',
            'course'=>'BS EE',
            'timein'=>'08:22:12',
            'timeout'=>'09:22:12',
            'img'=>'https://www.w3schools.com/howto/img_avatar2.png',
            'lastlogin'=>'2017-11-09'
        ]);
    }
}
