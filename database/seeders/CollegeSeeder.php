<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colleges')->insert([
            [
                'collid' => 1,
                'collfullname' => 'School of Business and Management',
                'collshortname' => 'SBM'
            ],
            [
                'collid' => 2,
                'collfullname' => 'School of Arts and Sciences',
                'collshortname' => 'SAS'
            ],
            [
                'collid' => 3,
                'collfullname' => 'School of Engineering',
                'collshortname' => 'SoENG'
            ],
            [
                'collid' => 4,
                'collfullname' => 'School of Education',
                'collshortname' => 'SED'
            ],
            [
                'collid' => 5,
                'collfullname' => 'School of Computer Studies',
                'collshortname' => 'SCS'
            ],
            [
                'collid' => 6,
                'collfullname' => 'School of Allied Medical Sciences',
                'collshortname' => 'SAMS'
            ]
        ]);
    }
}
