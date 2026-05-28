<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $pesertas = Peserta::latest()->paginate(10);
        return view('peserta.index', compact('pesertas'));
    }

    public function create()
    {
        return view('peserta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'          => 'required|string|max:255',
            'umur'          => 'required|integer|min:15|max:50',
            'jenis_kelamin' => 'required|in:L,P',
            'no_hp'         => 'required|string|max:20',
            'email'         => 'required|email|unique:pesertas,email',
            'kategori'      => 'required|string',
        ]);

        Peserta::create($request->all());

        return redirect()->route('peserta.index')
                         ->with('success', 'Peserta audisi berhasil ditambahkan!');
    }

    // DELETE
    public function destroy(Peserta $peserta)
    {
        $peserta->delete();

        return redirect()->route('peserta.index')
                         ->with('success', 'Peserta berhasil dihapus!');
    }
}