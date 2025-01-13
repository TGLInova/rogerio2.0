<?php

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('eventos', function () {

    return Evento::query()
        ->with('endereco')
        ->whereHas('datas', fn ($query) => $query->whereDate('data', '>=', now()))
        ->get()
        ->map
        ->append('texto_datas')
        ->groupBy('endereco.uf');
});
