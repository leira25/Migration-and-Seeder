<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'fname' => 'Ariel',
                'lname' => 'Yandan',
                'gender' => 'Male',
                'age' => '21',
                'contact_num' => '93855588'
            ],
            [
                'fname' => 'Loren',
                'lname' => 'Torres',
                'gender' => 'Male',
                'age' => '20',
                'contact_num' => '935458449'
            ],
            [
                'fname' => 'Noel',
                'lname' => 'Ervas',
                'gender' => 'Male',
                'age' => '23',
                'contact_num' => '93853588'
            ]
            ]);
    }
}
