@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Tiket</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('tiket.create') }}" class="btn btn-success mb-3">Tambah Tiket</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pelanggan</th>
                <th>Film & Jadwal</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $tiket)
                <tr>
                    <td>{{ $tiket->id }}</td>
                    <td>{{ $tiket->pelanggan->nama ?? '-' }}</td>
                    <td>
                        {{ $tiket->jadwal->film->judul ?? '-' }} - 
                        {{ \Carbon\Carbon::parse($tiket->jadwal->waktu_tayang)->format('d M Y H:i') }}
                    </td>
                    <td>{{ $tiket->jumlah }}</td>
                    <td>Rp {{ number_format($tiket->total_harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('tiket.edit', $tiket->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('tiket.destroy', $tiket->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus tiket ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data tiket.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
