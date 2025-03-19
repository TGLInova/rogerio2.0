<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Evento extends Model
{
    protected $fillable = ['nome', 'url'];

    public function datas(): HasMany
    {
        return $this->hasMany(EventoData::class);
    }


    public function endereco(): MorphOne
    {
        return $this->morphOne(Endereco::class, 'model');
    }


    public function getTextoDatasAttribute()
    {
        $grupo = $this
            ->datas()
            ->pluck('data')
            ->groupBy(fn ($data) => $data->isoFormat('MMMM'))
            ->map(fn ($item) => $item->map->format('d'));

        $itens = [];

        foreach ($grupo as $mes => $data) {
            $itens[] = $data->join(', ', ' e ') . ' de ' . Str::title($mes);
        }

        return collect($itens)->join(', ', ' e ');
    }
}
