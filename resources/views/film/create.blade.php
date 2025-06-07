@extends('layouts.app')

@section('title', 'Tambah Film')

@section('content')
    <div class="bg-secondary rounded p-4">
        <h4 class="mb-4">Tambah Film Baru</h4>

        <form action="{{ route('film.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="Judul" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Durasi (menit)</label>
                <input type="number" name="Durasi" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Rating</label>
                <input type="text" name="Rating" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Genre</label>
                <input type="text" name="Genre" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Foto Poster Film</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('film.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
