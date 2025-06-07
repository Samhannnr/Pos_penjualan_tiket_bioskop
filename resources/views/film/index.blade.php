@extends('layouts.app')

@section('title', 'Daftar Film')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Daftar Film</h1>
        <a href="{{ route('film.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Tambah Film
        </a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Durasi</th>
                <th>Rating</th>
                <th>Genre</th>
                <th>Poster</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($films as $film)
                <tr>
                    <td>{{ $film->id }}</td>
                    <td>{{ $film->Judul }}</td>
                    <td>{{ $film->Durasi }} menit</td>
                    <td>{{ $film->Rating }}</td>
                    <td>{{ $film->Genre }}</td>
                    <td>
                        @if ($film->image)
                            <img src="{{ asset('images/film/' . $film->image) }}" alt="Poster" width="80" style="object-fit: cover; border-radius: 4px;">
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('film.edit', $film->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('film.destroy', $film->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus film ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
