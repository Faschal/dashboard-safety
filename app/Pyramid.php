<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pyramid extends Model
{
    protected $table = 'pyramids';

    protected $fillable = [
        'lost_time',
        'medical_treatment',
        'work_injury',
        'nearmiss_potensial',
        'report_report',
        'report_nop',
        'report_lti',
        'audit_report',
        'audit_nop',
        'audit_lti',
        'unsafe_action',
        'lingkaran_1_1',
        'lingkaran_1_2',
        'unsafe_condition',
        'lingkaran_2_1',
        'lingkaran_2_2',
        'site_man',
        'zero_lti_man',
        'unique_id',
    ];
}
