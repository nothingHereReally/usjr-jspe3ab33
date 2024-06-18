<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'studid' => 21323,
                'studfirstname' => 'Zhar',
                'studlastname' => 'Calimpon',
                'studmidname' => 'G',
                'studprogid' => 3004,
                'studcollid' => 3,
                'studyear' => 2
            ],
            [
                'studid' => 333234,
                'studfirstname' => 'Roy Adrian',
                'studlastname' => 'Salares',
                'studmidname' => 'Mellor',
                'studprogid' => 5002,
                'studcollid' => 5,
                'studyear' => 2
            ],
            [
                'studid' => 5566556,
                'studfirstname' => 'Jamaica',
                'studlastname' => 'Dotillos',
                'studmidname' => 'G',
                'studprogid' => 5001,
                'studcollid' => 5,
                'studyear' => 1
            ],
            [
                'studid' => 33444344,
                'studfirstname' => 'Khiara Danielle',
                'studlastname' => 'Rubia',
                'studmidname' => 'C',
                'studprogid' => 5002,
                'studcollid' => 5,
                'studyear' => 4
            ],
            [
                'studid' => 55656665,
                'studfirstname' => 'Allen',
                'studlastname' => 'Deniega',
                'studmidname' => 'Zapico',
                'studprogid' => 1008,
                'studcollid' => 1,
                'studyear' => 1
            ],
        ]);
    }
}
