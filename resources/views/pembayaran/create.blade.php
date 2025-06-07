@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Pembayaran</h2>

    <form action="{{ route('pembayaran.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="tiket_id">Tiket</label>
            <select class="form-control" id="tiket_id" name="tiket_id" required>
                <option value="">Pilih Tiket</option>
                @foreach ($tiket as $item)
                    <option value="{{ $item->id }}">
                        ID: {{ $item->id }} - 
                        Film: {{ optional($item->jadwal->film)->Judul ?? 'Film Tidak Ditemukan' }} - 
                        Waktu: {{ $item->jadwal->waktu_tayang ?? 'Jadwal Tidak Ditemukan' }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
            <input type="number" class="form-control" id="jumlah_pembayaran" name="jumlah_pembayaran" required>
        </div>

        <div class="form-group">
            <label for="tanggal_bayar">Tanggal Pembayaran</label>
            <input type="date" class="form-control" id="tanggal_bayar" name="tanggal_bayar" required>
        </div>

        <div class="form-group">
            <label for="status_pembayaran">Status Pembayaran</label>
            <select class="form-control" id="status_pembayaran" name="status_pembayaran" required>
                <option value="Lunas">Lunas</option>
                <option value="Pending">Pending</option>
                <option value="Belum Lunas">Belum Lunas</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
