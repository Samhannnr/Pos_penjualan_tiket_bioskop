@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Pembayaran</h2>

        <a href="{{ route('pembayaran.create') }}" class="btn btn-success mb-3">Tambah Pembayaran</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tiket</th>
                    <th>Jumlah Pembayaran</th>
                    <th>Tanggal Bayar</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembayaran as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                {{ $item->tiket->id }} -
                                {{ $item->tiket && $item->tiket->jadwal && $item->tiket->jadwal->film
                    ? $item->tiket->jadwal->film->Judul
                    : 'Film Tidak Ditemukan' }}
                                {{ $item->tiket->jadwal->waktu_tayang ?? 'Jadwal Tidak Ditemukan' }}
                            </td>
                            <td>Rp{{ number_format($item->jumlah_pembayaran, 0, ',', '.') }}</td>
                            <td>{{ $item->tanggal_bayar }}</td>
                            <td>
                                <span
                                    class="badge {{ $item->status_pembayaran == 'Lunas' ? 'bg-success' : 'bg-warning text-dark' }}">
                                    {{ $item->status_pembayaran }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('pembayaran.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{ route('pembayaran.destroy', $item->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection