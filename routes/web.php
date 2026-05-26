<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;

Route::get('/', function () {
    return redirect()->route('peserta.index');
});

Route::resource('peserta', PesertaController::class);