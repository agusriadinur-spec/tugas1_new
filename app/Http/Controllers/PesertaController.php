<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $pesertas = Peserta::latest()->paginate(10); // Pakai paginate agar rapi
        return view('peserta.index', compact('pesertas'));
    }
}