@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Tiket</h2>

    <form action="{{ route('tiket.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="jadwal_id">Jadwal</label>
            <select class="form-control" id="jadwal_id" name="jadwal_id" required>
                @foreach ($jadwals as $jadwal)
                    <option 
                        value="{{ $jadwal->id }}"
                        {{ $jadwal->id == $data->jadwal_id ? 'selected' : '' }}
                        {{ $jadwal->sisa_kursi <= 0 && $jadwal->id != $data->jadwal_id ? 'disabled' : '' }}>
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
                @foreach ($pelanggans as $pelanggan)
                    <option value="{{ $pelanggan->id }}" {{ $pelanggan->id == $data->pelanggan_id ? 'selected' : '' }}>
                        {{ $pelanggan->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="jumlah">Jumlah Tiket</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $data->jumlah }}" required min="1" oninput="updateTotalHarga()">
        </div>

        <div class="form-group mb-3">
            <label for="total_harga">Total Harga</label>
            <input type="number" class="form-control" id="total_harga" name="total_harga" value="{{ $data->total_harga }}" required readonly>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('tiket.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script>
    // Update total harga berdasarkan jumlah tiket yang diinput
    function updateTotalHarga() {
        const jadwalId = document.getElementById('jadwal_id').value;
        const jumlah = document.getElementById('jumlah').value;
        let hargaTiket = 0;

        // Ambil harga tiket berdasarkan jadwal yang dipilih
        @foreach($jadwals as $jadwal)
            if (jadwalId == {{ $jadwal->id }}) {
                hargaTiket = {{ $jadwal->harga_tiket }};
            }
        @endforeach

        // Hitung total harga
        const totalHarga = hargaTiket * jumlah;
        document.getElementById('total_harga').value = totalHarga;
    }

    // Update total harga saat halaman pertama kali dimuat
    window.onload = updateTotalHarga;
</script>
@endsection
