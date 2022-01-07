<?php

namespace App\Imports;

use App\Pyramid;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PyramidImport implements ToCollection, WithHeadingRow
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

            Pyramid::updateOrCreate([
                'unique_id' => $row['unique_id'],
            ], [
                'lost_time' => $row['lost_time'],
                'medical_treatment' => $row['medical_treatment'],
                'work_injury' => $row['work_injury'],
                'nearmiss_potensial' => $row['nearmiss_potensial'],
                'report_report' => $row['report_report'],
                'report_nop' => $row['report_nop'],
                'report_lti' => $row['report_lti'],
                'audit_report' => $row['audit_report'],
                'audit_nop' => $row['audit_nop'],
                'audit_lti' => $row['audit_lti'],
                'unsafe_action' => $row['unsafe_action'],
                'lingkaran_1_1' => $row['lingkaran_1_1'],
                'lingkaran_1_2' => $row['lingkaran_1_2'],
                'unsafe_condition' => $row['unsafe_condition'],
                'lingkaran_2_1' => $row['lingkaran_2_1'],
                'lingkaran_2_2' => $row['lingkaran_2_2'],
                'site_man' => $row['site_man'],
                'zero_lti_man' => $row['zero_lti_man'],
            ]);
        }
    }
}
