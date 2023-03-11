<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'name' => 'Computer Programming',
                'is_draft' => 0
            ],
            [
                'name' => 'Networking',
                'is_draft' => 0
            ],
            [
                'name' => 'OOP',
                'is_draft' => 0
            ]
            ]);
    }
}
