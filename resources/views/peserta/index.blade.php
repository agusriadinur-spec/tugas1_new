@extends('layouts.app')

@section('title', 'Daftar Peserta Audisi')

@section('content')
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h4>🎤 Daftar Peserta Audisi</h4>
                <a href="{{ route('peserta.create') }}" class="btn btn-primary">
                    + Tambah Peserta
                </a>
            </div>

            <div class="card-body">
                <p class="mb-3"><strong>Total Peserta:</strong> {{ $pesertas->total() }} orang</p>

                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>No HP</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesertas as $peserta)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $peserta->nama }}</td>
                                    <td>{{ $peserta->umur }} tahun</td>
                                    <td>{{ $peserta->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                    <td>{{ $peserta->no_hp }}</td>
                                    <td>{{ $peserta->kategori }}</td>
                                    <td>
                                        <span
                                            class="badge bg-{{ $peserta->status == 'Lolos' ? 'success' : ($peserta->status == 'Gagal' ? 'danger' : 'warning') }}">
                                            {{ $peserta->status }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('peserta.edit', $peserta) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination Bersih -->
                @if ($pesertas->hasPages())
                    <div class="mt-4 d-flex justify-content-center">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-sm">
                                <!-- Previous -->
                                <li class="page-item {{ $pesertas->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $pesertas->previousPageUrl() }}" aria-label="Previous">
                                        &laquo; Prev
                                    </a>
                                </li>

                                <!-- Page Numbers -->
                                @for ($i = 1; $i <= $pesertas->lastPage(); $i++)
                                    <li class="page-item {{ $pesertas->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $pesertas->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                <!-- Next -->
                                <li class="page-item {{ $pesertas->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $pesertas->nextPageUrl() }}" aria-label="Next">
                                        Next &raquo;
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                @endif
