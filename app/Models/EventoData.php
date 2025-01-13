<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventoData extends Model
{

    protected $table = 'evento_datas';

    protected $fillable = ['data'];

    public $timestamps = false;

    protected function casts()
    {
        return [
            'data' => 'datetime'
        ];
    }
}
