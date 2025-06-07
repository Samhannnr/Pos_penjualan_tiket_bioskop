<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Film;
use App\Models\Studio;

class jadwalController extends Controller
{
    public function index()
    {
        $data = Jadwal::with(['film', 'studio'])->get();
        return view('jadwal.index', compact('data'));
    }

    public function create()
    {
        $films = Film::all();
        $studios = Studio::all();
        return view('jadwal.create', compact('films', 'studios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'film_id' => 'required|exists:film,id',
            'studio_id' => 'required|exists:studio,id',
            'waktu_tayang' => 'required|date',
            'harga_tiket' => 'required|numeric',
        ]);

        Jadwal::create($request->all());

        return redirect()->route('jadwal.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $films = Film::all();
        $studios = Studio::all();
        return view('jadwal.edit', compact('jadwal', 'films', 'studios'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'film_id' => 'required|exists:film,id',
            'studio_id' => 'required|exists:studio,id',
            'waktu_tayang' => 'required|date',
            'harga_tiket' => 'required|numeric',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());

        return redirect()->route('jadwal.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Jadwal::destroy($id);
        return redirect()->route('jadwal.index')->with('success', 'Data berhasil dihapus');
    }
}
