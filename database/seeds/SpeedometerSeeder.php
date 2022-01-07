<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeedometerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('speedometers')->insert([
            'baku_mutu' => 70,
            'emisi_sumber' => 87,
            'udara_ambient' => 100,
            'no_incident' => 1,
            'impact' => 'M',
            'unique_id' => 1,
        ]);
    }
}
