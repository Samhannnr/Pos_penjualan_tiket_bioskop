<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;

class StudioTableController extends Controller
{
    // Menampilkan semua data studio (menggunakan view)
    public function index()
    {
        $data = Studio::all();
        return view('studio.index', compact('data'));  // pastikan ada view 'studio.index'
    }

    // Menampilkan form untuk membuat studio baru
    public function create()
    {
        return view('studio.create');  // pastikan ada view 'studio.create'
    }

    // Menyimpan data studio baru
    public function store(Request $request)
    {
        Studio::create($request->all());
        return redirect()->route('studio.index');  // Redirect setelah menyimpan
    }

    // Menampilkan detail data studio
    public function show($id)
    {
        $data = Studio::findOrFail($id);
        return view('studio.show', compact('data'));  // pastikan ada view 'studio.show'
    }

    // Menampilkan form untuk mengedit data studio
    public function edit($id)
    {
        $data = Studio::findOrFail($id);
        return view('studio.edit', compact('data'));  // pastikan ada view 'studio.edit'
    }

    // Mengupdate data studio
    public function update(Request $request, $id)
    {
        $data = Studio::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('studio.index');  // Redirect setelah update
    }

    // Menghapus data studio
    public function destroy($id)
    {
        $data = Studio::findOrFail($id);
        $data->delete();
        return redirect()->route('studio.index');  // Redirect setelah menghapus
    }
}
