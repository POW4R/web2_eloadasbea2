<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'driverId',
        'gpDate',
        'position',
        'mistake',
        'team',
        'type',
        'engine',
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driverId');
    }

    public function gp()
    {
        return $this->belongsTo(GP::class, 'gpDate', 'date');
    }
}
