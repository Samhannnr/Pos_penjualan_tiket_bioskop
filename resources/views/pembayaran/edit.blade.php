@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Pembayaran</h2>

    <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="tiket_id">Tiket</label>
            <select class="form-control" id="tiket_id" name="tiket_id" required>
                @foreach ($tiket as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $pembayaran->tiket_id ? 'selected' : '' }}>
                        {{ $item->id }} - {{ optional($item->jadwal->film)->Judul ?? 'Film Tidak Ditemukan' }} - {{ $item->jadwal->waktu_tayang ?? 'Jadwal Tidak Ditemukan' }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
            <input type="number" class="form-control" id="jumlah_pembayaran" name="jumlah_pembayaran" value="{{ old('jumlah_pembayaran', $pembayaran->jumlah_pembayaran) }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal_bayar">Tanggal Pembayaran</label>
            <input type="date" class="form-control" id="tanggal_bayar" name="tanggal_bayar" value="{{ old('tanggal_bayar', $pembayaran->tanggal_bayar) }}" required>
        </div>

        <div class="form-group">
            <label for="status_pembayaran">Status Pembayaran</label>
            <select class="form-control" id="status_pembayaran" name="status_pembayaran" required>
                <option value="Lunas" {{ $pembayaran->status_pembayaran == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                <option value="Pending">Pending</option>
                <option value="Gagal">Pending</option>
                <option value="Belum Lunas" {{ $pembayaran->status_pembayaran == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Perbarui Pembayaran</button>
    </form>
</div>
@endsection
