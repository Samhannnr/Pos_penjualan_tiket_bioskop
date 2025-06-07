<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Tiket;
use Illuminate\Http\Request;

class PembayaranTableController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::with('tiket.jadwal.film')->get(); // pakai eager loading ke jadwal & film
        return view('pembayaran.index', compact('pembayaran'));
    }
    

    public function create()
    {
        $tiket = Tiket::with('jadwal.film')->get();
        return view('pembayaran.create', compact('tiket'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tiket_id' => 'required|exists:tiket,id',
            'jumlah_pembayaran' => 'required|numeric',
            'tanggal_bayar' => 'required|date',
            'status_pembayaran' => 'required|string',
        ]);

        Pembayaran::create($validated);
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil disimpan!');
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $tiket = Tiket::with('jadwal.film')->get();
        return view('pembayaran.edit', compact('pembayaran', 'tiket'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tiket_id' => 'required|exists:tiket,id',
            'jumlah_pembayaran' => 'required|numeric',
            'tanggal_bayar' => 'required|date',
            'status_pembayaran' => 'required|string',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update($validated);
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil dihapus!');
    }
}
