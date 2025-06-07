<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use App\Models\Studio;
use Illuminate\Http\Request;

class TiketTableController extends Controller
{
    public function index()
    {
        // Mengambil data tiket dan eager load relasi 'pelanggan' dan 'jadwal'
        $data = Tiket::with(['pelanggan', 'jadwal'])->get();

        return view('tiket.index', compact('data'));
    }

    public function create()
    {
        $studios = Studio::all();
        $jadwals = \App\Models\Jadwal::with('film')->get();
        $pelanggans = \App\Models\Pelanggan::all();
    
        return view('tiket.create', compact('studios', 'jadwals', 'pelanggans'));
        
    }
    

    public function store(Request $request)
    {
        Tiket::create($request->all());
        return redirect()->route('tiket.index')->with('success', 'Data berhasil disimpan');
    }

    public function show($id)
    {
        $data = Tiket::findOrFail($id);
        return view('tiket.show', compact('data'));
    }

    public function edit($id)
{
    $data = Tiket::findOrFail($id);
    $jadwals = \App\Models\Jadwal::with('film')->get();
    $pelanggans = \App\Models\Pelanggan::all();
    return view('tiket.edit', compact('data', 'jadwals', 'pelanggans'));
}

    public function update(Request $request, $id)
    {
        $data = Tiket::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('tiket.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $data = Tiket::findOrFail($id);
        $data->delete();
        return redirect()->route('tiket.index')->with('success', 'Data berhasil dihapus');
    }
}
