@extends('layouts.app')

@section('title', 'Edit Peserta Audisi')

@section('content')
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-warning text-dark">
                <h4>✏️ Edit Data Peserta</h4>
            </div>

            <div class="card-body">
                <form action="{{ url('/peserta/' . $peserta->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control"
                                value="{{ old('nama', $peserta->nama) }}" required>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="form-label">Umur</label>
                            <input type="number" name="umur" class="form-control"
                                value="{{ old('umur', $peserta->umur) }}" required>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" required>
                                <option value="L"
                                    {{ old('jenis_kelamin', $peserta->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki
                                </option>
                                <option value="P"
                                    {{ old('jenis_kelamin', $peserta->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">No. HP</label>
                            <input type="text" name="no_hp" class="form-control"
                                value="{{ old('no_hp', $peserta->no_hp) }}" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email', $peserta->email) }}" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Kategori Audisi</label>
                        <select name="kategori" class="form-select" required>
                            <option value="Nyanyi" {{ old('kategori', $peserta->kategori) == 'Nyanyi' ? 'selected' : '' }}>
                                Nyanyi</option>
                            <option value="Tari" {{ old('kategori', $peserta->kategori) == 'Tari' ? 'selected' : '' }}>
                                Tari</option>
                            <option value="Musik" {{ old('kategori', $peserta->kategori) == 'Musik' ? 'selected' : '' }}>
                                Musik</option>
                            <option value="Akting" {{ old('kategori', $peserta->kategori) == 'Akting' ? 'selected' : '' }}>
                                Akting</option>
                            <option value="Magic" {{ old('kategori', $peserta->kategori) == 'Magic' ? 'selected' : '' }}>
                                Magic</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('peserta.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-warning">Update Peserta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
