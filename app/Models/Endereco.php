<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'complemento',
        'cidade',
        'bairro',
        'uf',
        'logradouro',
        'numero',
        'cep',

    ];


    public function model()
    {
        return $this->morphTo();
    }
}
