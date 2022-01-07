<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speedometer extends Model
{

    protected $tables = 'speedometers';

    protected $fillable = [
        'baku_mutu',
        'emisi_sumber',
        'udara_ambient',
        'no_incident',
        'impact',
        'unique_id',
    ];
}
