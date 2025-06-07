<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('film.index', compact('films'));
    }

    public function create()
    {
        return view('film.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Judul' => 'required|string|max:255',
            'Durasi' => 'required|integer|min:1',
            'Rating' => 'required|string|max:10',
            'Genre' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $data = $request->all();
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/film', 'public');
            $data['image'] = $imagePath;
        }
    
        Film::create($data);
    
        return redirect()->route('film.index')->with('success', 'Data berhasil disimpan.');
    }
    

    public function show(string $id)
    {
        $film = Film::findOrFail($id);
        return view('film.show', compact('film')); // optional kalau ingin detail
    }

    public function edit(string $id)
    {
        $film = Film::findOrFail($id);
        return view('film.edit', compact('film'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Judul' => 'required|string|max:255',
            'Durasi' => 'required|integer|min:1',
            'Rating' => 'required|string|max:10',
            'Genre' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $film = Film::findOrFail($id);
        $data = $request->all();
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/film', 'public');
            $data['image'] = $imagePath;
        }
    
        $film->update($data);
    
        return redirect()->route('film.index')->with('success', 'Data berhasil diperbarui.');
    }
    
    public function destroy(string $id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect()->route('film.index')->with('success', 'Data berhasil dihapus.');
    }
}
