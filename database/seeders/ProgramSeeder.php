<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programs')->insert([
            [
                'progid' => 1001,
                'progfullname' => 'Bachelor of Science in Accountancy',
                'progshortname' => 'BSA',
                'progcollid' => 1,
                'progcolldeptid' => 1001
            ],
            [
                'progid' => 1002,
                'progfullname' => 'Bachelor of Science in Management Accounting',
                'progshortname' => 'BSMA',
                'progcollid' => 1,
                'progcolldeptid' => 1001
            ],
            [
                'progid' => 1003,
                'progfullname' => 'Bachelor of Science in Business Administration Major in Operation Management',
                'progshortname' => 'BSBA-OM',
                'progcollid' => 1,
                'progcolldeptid' => 1003
            ],
            [
                'progid' => 1004,
                'progfullname' => 'Bachelor of Science in Business Administration Major in Human Resource Development Management',
                'progshortname' => 'BSBA-HRDM',
                'progcollid' => 1,
                'progcolldeptid' => 1003
            ],
            [
                'progid' => 1005,
                'progfullname' => 'Bachelor of Science in Business Administration Major in Marketing Management',
                'progshortname' => 'BSBA-MM',
                'progcollid' => 1,
                'progcolldeptid' => 1003
            ],
            [
                'progid' => 1006,
                'progfullname' => 'Bachelor of Science in Business Administration Major in Finanacial Management',
                'progshortname' => 'BSBA-FM',
                'progcollid' => 1,
                'progcolldeptid' => 1001
            ],
            [
                'progid' => 1007,
                'progfullname' => 'Bachelor of Science in Entrepreneurship',
                'progshortname' => 'BS-Entrepreneurship',
                'progcollid' => 1,
                'progcolldeptid' => 1002
            ],
            [
                'progid' => 1008,
                'progfullname' => 'Bachelor of Science in Hospitality Management',
                'progshortname' => 'BSHM',
                'progcollid' => 1,
                'progcolldeptid' => 1004
            ],
            [
                'progid' => 1009,
                'progfullname' => 'Bachelor of Science in Hospitality Management Major in Food and Beverage',
                'progshortname' => 'BSHM-FB',
                'progcollid' => 1,
                'progcolldeptid' => 1004
            ],
            [
                'progid' => 1010,
                'progfullname' => 'Associate in Hospitality Management',
                'progshortname' => 'AHM',
                'progcollid' => 1,
                'progcolldeptid' => 1004
            ],
            [
                'progid' => 1011,
                'progfullname' => 'Associate in Tourism',
                'progshortname' => 'ATourism',
                'progcollid' => 1,
                'progcolldeptid' => 1004
            ],
            [
                'progid' => 2001,
                'progfullname' => 'Bachelor of Arts in Communication',
                'progshortname' => 'ABComm',
                'progcollid' => 2,
                'progcolldeptid' => 2001
            ],
            [
                'progid' => 2002,
                'progfullname' => 'Bachelor of Arts in English Language Studies',
                'progshortname' => 'ABELS',
                'progcollid' => 2,
                'progcolldeptid' => 2001
            ],
            [
                'progid' => 2003,
                'progfullname' => 'Bachelor of Arts in Journalism',
                'progshortname' => 'ABJournalism',
                'progcollid' => 2,
                'progcolldeptid' => 2001
            ],
            [
                'progid' => 2004,
                'progfullname' => 'Bachelor of Arts in Marketing Communication',
                'progshortname' => 'ABMarComm',
                'progcollid' => 2,
                'progcolldeptid' => 2001
            ],
            [
                'progid' => 2005,
                'progfullname' => 'Bachelor of Science in Biology Major in Medical Biology',
                'progshortname' => 'BSBio-MB',
                'progcollid' => 2,
                'progcolldeptid' => 2002
            ],
            [
                'progid' => 2006,
                'progfullname' => 'Bachelor of Science in Biology Major in Microbiology',
                'progshortname' => 'BSBio-Microbio',
                'progcollid' => 2,
                'progcolldeptid' => 2002
            ],
            [
                'progid' => 2007,
                'progfullname' => 'Bachelor of Arts in Political Science',
                'progshortname' => 'ABPolSci',
                'progcollid' => 2,
                'progcolldeptid' => 2003
            ],
            [
                'progid' => 2008,
                'progfullname' => 'Bachelor of Arts in International Studies',
                'progshortname' => 'ABIS',
                'progcollid' => 2,
                'progcolldeptid' => 2003            ],
            [
                'progid' => 2009,
                'progfullname' => 'Bachelor of Arts in Philosophy',
                'progshortname' => 'ABPhilo',
                'progcollid' => 2,
                'progcolldeptid' => 2003
            ],
            [
                'progid' => 2010,
                'progfullname' => 'Bachelor of Science in Psychology',
                'progshortname' => 'BSPsych',
                'progcollid' => 2,
                'progcolldeptid' => 2004
            ],
            [
                'progid' => 3001,
                'progfullname' => 'Bachelor of Science in Civil Engineering',
                'progshortname' => 'BSCE',
                'progcollid' => 3,
                'progcolldeptid' => 3001
            ],
            [
                'progid' => 3002,
                'progfullname' => 'Bachelor of Science in Computer Engineering',
                'progshortname' => 'BSCpE',
                'progcollid' => 3,
                'progcolldeptid' => 3002
            ],
            [
                'progid' => 3003,
                'progfullname' => 'Bachelor of Science in Electronics and Communications Engineering',
                'progshortname' => 'BSECE',
                'progcollid' => 3,
                'progcolldeptid' => 3003
            ],
            [
                'progid' => 3004,
                'progfullname' => 'Bachelor of Science in Electrical Engineering',
                'progshortname' => 'BSEE',
                'progcollid' => 3,
                'progcolldeptid' => 3004
            ],
            [
                'progid' => 3005,
                'progfullname' => 'Bachelor of Science in Industrial Engineering',
                'progshortname' => 'BSIE',
                'progcollid' => 3,
                'progcolldeptid' => 3005
            ],
            [
                'progid' => 3006,
                'progfullname' => 'Bachelor of Science in Mechanical Engineering',
                'progshortname' => 'BSME',
                'progcollid' => 3,
                'progcolldeptid' => 3006
            ],
            [
                'progid' => 4001,
                'progfullname' => 'Bachelor of Elementary Education',
                'progshortname' => 'BEEEd',
                'progcollid' => 4,
                'progcolldeptid' => 4001
            ],
            [
                'progid' => 4002,
                'progfullname' => 'Bachelor of Early Childhood Education',
                'progshortname' => 'BECE',
                'progcollid' => 4,
                'progcolldeptid' => 4001
            ],
            [
                'progid' => 4003,
                'progfullname' => 'Bachelor of Physical Education',
                'progshortname' => 'BPE',
                'progcollid' => 4,
                'progcolldeptid' => 4002
            ],
            [
                'progid' => 4004,
                'progfullname' => 'Bachelor of Secondary Education Major in English',
                'progshortname' => 'BSEd-English',
                'progcollid' => 4,
                'progcolldeptid' => 4001
            ],
            [
                'progid' => 4005,
                'progfullname' => 'Bachelor of Secondary Education Major in Filipino',
                'progshortname' => 'BSEd-Filipino',
                'progcollid' => 4,
                'progcolldeptid' => 4001
            ],
            [
                'progid' => 4006,
                'progfullname' => 'Bachelor of Secondary Education Major in Mathematics',
                'progshortname' => 'BSEd-Mathematics',
                'progcollid' => 4,
                'progcolldeptid' => 4001
            ],
            [
                'progid' => 4007,
                'progfullname' => 'Bachelor of Secondary Education Major in Science',
                'progshortname' => 'BSEd-Science',
                'progcollid' => 4,
                'progcolldeptid' => 4001
            ],
            [

                'progid' => 4008,
                'progfullname' => 'Bachelor of Special Needs Education - Generalist',
                'progshortname' => 'BSNE-General',
                'progcollid' => 4,
                'progcolldeptid' => 4003
            ],
            [
                'progid' => 4009,
                'progfullname' => 'Bachelor of Special Needs Education Major in Early Childhood Education',
                'progshortname' => 'BSNE-ECE',
                'progcollid' => 4,
                'progcolldeptid' => 4003
            ],
            [
                'progid' => 4010,
                'progfullname' => 'Bachelor of Special Needs Education Major in Elementary School Teaching',
                'progshortname' => 'BSNE-EST',
                'progcollid' => 4,
                'progcolldeptid' => 4003
            ],
            [
                'progid' => 5001,
                'progfullname' => 'Bachelor of Science in Computer Science',
                'progshortname' => 'BSCS',
                'progcollid' => 5,
                'progcolldeptid' => 5001
            ],
            [
                'progid' => 5002,
                'progfullname' => 'Bachelor of Science in Information Technology',
                'progshortname' => 'BSIT',
                'progcollid' => 5,
                'progcolldeptid' => 5001
            ],
            [
                'progid' => 5003,
                'progfullname' => 'Bachelor of Science in Information Systems',
                'progshortname' => 'BSIS',
                'progcollid' => 5,
                'progcolldeptid' => 5001
            ],
            [
                'progid' => 5004,
                'progfullname' => 'Bachelor of Science in Entertainment and Multimedia Computing',
                'progshortname' => 'BSEMC',
                'progcollid' => 5,
                'progcolldeptid' => 5001
            ],
            [
                'progid' => 6001,
                'progfullname' => 'Bachelor of Science in Nursing',
                'progshortname' => 'BSN',
                'progcollid' => 6,
                'progcolldeptid' => 6001
            ],
        ]);
    }
}
