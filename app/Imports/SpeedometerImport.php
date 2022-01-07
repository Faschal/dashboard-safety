<?php

namespace App\Imports;

use App\Speedometer;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;

class SpeedometerImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            if (!isset($row['unique_id'])) 
            {
                return null;
            }

            Speedometer::updateOrCreate([
                'unique_id' => $row['unique_id'],
            ], [
                'baku_mutu' => $row['baku_mutu'],
                'emisi_sumber' => $row['emisi_sumber'],
                'udara_ambient' => $row['udara_ambient'],
                'no_incident' => $row['no_incident'],
                'impact' => $row['impact'],
            ]);
        }
    }   
}
