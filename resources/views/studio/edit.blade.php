@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Studio</h2>

    <form action="{{ route('studio.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Studio</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" required>
        </div>

        <div class="form-group">
            <label for="kapasitas">Kapasitas</label>
            <input type="number" class="form-control" id="kapasitas" name="kapasitas" value="{{ $data->kapasitas }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
