@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Pelanggan</h2>
    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf
        @include('pelanggan.form')
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
