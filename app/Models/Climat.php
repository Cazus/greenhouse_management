<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Climat extends Model
{
    protected $fillable = [
        'tmax', 'tmin', 'text', 'hmes', 'vmes', 'rs', 'dinst', 'krs', 'date', 'zone_id'
    ];

    public function zone()
    {
        $this->belongsTo(Zone::class, 'zone_id');
    }
}
