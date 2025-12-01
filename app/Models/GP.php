<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GP extends Model
{
    protected $primaryKey = 'date';
    public $incrementing = false;
    protected $keyType = 'datetime';

    protected $fillable = [
        'date',
        'name',
        'country',
    ];

    public function results()
    {
        return $this->hasMany(Result::class, 'gpDate', 'date');
    }
}
