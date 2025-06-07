@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Jadwal</h2>
    <form action="{{ route('jadwal.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Film</label>
            <select name="film_id" class="form-control">
                @foreach ($films as $film)
                    <option value="{{ $film->id }}">{{ $film->Judul }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Studio</label>
            <select name="studio_id" class="form-control">
                @foreach ($studios as $studio)
                    <option value="{{ $studio->id }}">{{ $studio->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Waktu Tayang</label>
            <input type="datetime-local" name="waktu_tayang" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga Tiket</label>
            <input type="number" name="harga_tiket" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
