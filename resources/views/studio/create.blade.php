@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Studio</h2>

    <form action="{{ route('studio.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama Studio</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="kapasitas">Kapasitas</label>
            <input type="number" class="form-control" id="kapasitas" name="kapasitas" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
