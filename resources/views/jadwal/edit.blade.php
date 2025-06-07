@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Jadwal</h2>
    <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Film</label>
            <select name="film_id" class="form-control">
                @foreach ($films as $film)
                    <option value="{{ $film->id }}" {{ $jadwal->film_id == $film->id ? 'selected' : '' }}>
                        {{ $film->Judul }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Studio</label>
            <select name="studio_id" class="form-control">
                @foreach ($studios as $studio)
                    <option value="{{ $studio->id }}" {{ $jadwal->studio_id == $studio->id ? 'selected' : '' }}>
                        {{ $studio->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Waktu Tayang</label>
            <input type="datetime-local" name="waktu_tayang" class="form-control"
                   value="{{ date('Y-m-d\TH:i', strtotime($jadwal->waktu_tayang)) }}" required>
        </div>
        <div class="mb-3">
            <label>Harga Tiket</label>
            <input type="number" name="harga_tiket" class="form-control" value="{{ $jadwal->harga_tiket }}" required>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
