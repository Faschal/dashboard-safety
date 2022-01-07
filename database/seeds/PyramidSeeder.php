<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PyramidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pyramids')->insert([
            'lost_time' => 1,
            'medical_treatment' => 2,
            'work_injury' => 3,
            'nearmiss_potensial' => 4,
            'report_report' => 40,
            'report_nop' => 40,
            'report_lti' => 40,
            'audit_report' => 30,
            'audit_nop' => 30,
            'audit_lti' => 30,
            'unsafe_action' => 70,
            'lingkaran_1_1' => 30,
            'lingkaran_1_2' => 70,
            'unsafe_condition' => 80,
            'lingkaran_2_1' => 20,
            'lingkaran_2_2' => 80,
            'site_man' => 120000,
            'zero_lti_man' => 140000,
            'unique_id' => 1,
        ]);
    }
}
