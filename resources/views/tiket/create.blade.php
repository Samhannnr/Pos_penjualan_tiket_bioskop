@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Tiket</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('tiket.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="jadwal_id">Jadwal</label>
            <select class="form-control" id="jadwal_id" name="jadwal_id" required>
                <option value="">Pilih Jadwal</option>
                @foreach ($jadwals as $jadwal)
                    <option 
                        value="{{ $jadwal->id }}"
                        {{ $jadwal->sisa_kursi <= 0 ? 'disabled' : '' }}>
                        {{ $jadwal->film->judul ?? 'Film' }} - 
                        {{ \Carbon\Carbon::parse($jadwal->waktu_tayang)->format('d M Y H:i') }} 
                        (Sisa Kursi: {{ $jadwal->sisa_kursi }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="pelanggan_id">Pelanggan</label>
            <select class="form-control" id="pelanggan_id" name="pelanggan_id" required>
                <option value="">Pilih Pelanggan</option>
                @foreach ($pelanggans as $pelanggan)
                    <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="jumlah">Jumlah Tiket</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required min="1">
        </div>

        <div class="form-group mb-3">
            <label for="total_harga">Total Harga</label>
            <input type="number" class="form-control" id="total_harga" name="total_harga" required min="0">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('tiket.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
