@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Data Jadwal</h2>
    <a href="{{ route('jadwal.create') }}" class="btn btn-primary mb-3">+ Tambah Jadwal</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Film</th>
                <th>Studio</th>
                <th>Waktu Tayang</th>
                <th>Harga Tiket</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $jadwal)
                <tr>
                    <td>{{ $jadwal->film->Judul ?? '-' }}</td>
                    <td>{{ $jadwal->studio->nama ?? '-' }}</td>
                    <td>{{ $jadwal->waktu_tayang }}</td>
                    <td>Rp{{ number_format($jadwal->harga_tiket, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
