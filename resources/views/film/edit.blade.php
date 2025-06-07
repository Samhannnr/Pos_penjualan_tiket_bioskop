@extends('layouts.app')

@section('title', 'Edit Film')

@section('content')
    <div class="bg-secondary rounded p-4">
        <h4 class="mb-4">Edit Film: {{ $film->Judul }}</h4>

        <form action="{{ route('film.update', $film->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="Judul" class="form-control" value="{{ $film->Judul }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Durasi (menit)</label>
                <input type="number" name="Durasi" class="form-control" value="{{ $film->Durasi }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Rating</label>
                <input type="text" name="Rating" class="form-control" value="{{ $film->Rating }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Genre</label>
                <input type="text" name="Genre" class="form-control" value="{{ $film->Genre }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar / Poster Film</label>
                <input type="file" name="image" class="form-control">
                @if($film->image)
                    <div class="mt-2">
                        <p>Gambar Saat Ini:</p>
                        <img src="{{ asset('storage/' . $film->image) }}" alt="Poster Film" width="150" class="img-thumbnail">
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
            <a href="{{ route('film.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
