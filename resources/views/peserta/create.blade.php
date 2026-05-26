@extends('layouts.app')

@section('title', 'Tambah Peserta Audisi')

@section('content')
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4>+ Tambah Peserta Audisi Baru</h4>
            </div>

            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('peserta.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="form-label">Umur <span class="text-danger">*</span></label>
                            <input type="number" name="umur" class="form-control @error('umur') is-invalid @enderror"
                                value="{{ old('umur') }}" min="15" max="50" required>
                            @error('umur')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                            <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror"
                                required>
                                <option value="">Pilih</option>
                                <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki
                                </option>
                                <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">No. HP <span class="text-danger">*</span></label>
                            <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror"
                                value="{{ old('no_hp') }}" required>
                            @error('no_hp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Kategori Audisi <span class="text-danger">*</span></label>
                        <select name="kategori" class="form-select @error('kategori') is-invalid @enderror" required>
                            <option value="">Pilih Kategori</option>
                            <option value="Nyanyi" {{ old('kategori') == 'Nyanyi' ? 'selected' : '' }}>Nyanyi</option>
                            <option value="Tari" {{ old('kategori') == 'Tari' ? 'selected' : '' }}>Tari</option>
                            <option value="Musik" {{ old('kategori') == 'Musik' ? 'selected' : '' }}>Musik</option>
                            <option value="Akting" {{ old('kategori') == 'Akting' ? 'selected' : '' }}>Akting</option>
                            <option value="Magic" {{ old('kategori') == 'Magic' ? 'selected' : '' }}>Magic</option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('peserta.index') }}" class="btn btn-secondary me-2">Batal</a>
                        <button type="submit" class="btn btn-success">Simpan Peserta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
