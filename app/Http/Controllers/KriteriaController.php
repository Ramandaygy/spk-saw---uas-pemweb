<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriterias = Kriteria::all();
        $title = 'Kriteria';
        return view('kriteria.index', compact('title', 'kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create New Kriteria';
        return view('kriteria.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kriteria' => 'required',
            'atribut' => 'required',
            'bobot' => 'required|numeric',
        ]);

        // Simpan data ke dalam database setelah validasi sukses
        Kriteria::create([
            
            'nama_kriteria' => $request->nama_kriteria,
            'atribut' => $request->atribut,
            'bobot' => $request->bobot,
        ]);

        return redirect()->route('kriteria.index')->with('success', 'Kriteria created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Kriteria $kriteria) // type-hinted the $kriteria parameter
    {
        return view('kriteria.show', compact('kriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_kriteria)
    {
        $title = 'Edit Kriteria';
        $kriteria = Kriteria::findOrFail($id_kriteria);
        return view('kriteria.edit', compact('title', 'kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kriteria $id_kriteria) // type-hinted the $kriteria parameter
    {
        $request->validate([
            'nama_kriteria' => 'required',
            'atribut' => 'required',
            'bobot' => 'required|numeric',
        ]);

        $kriteria = Kriteria::findOrFail($id_kriteria); // Ganti sesuai dengan model yang digunakan untuk Kriteria
        $kriteria->nama_kriteria = $request->nama_kriteria;
        $kriteria->atribut = $request->atribut;
        $kriteria->bobot = $request->bobot;
        $kriteria->save();

        return redirect()->route('kriteria.index')->with('success', 'Kriteria updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kriteria $kriteria) // type-hinted the $kriteria parameter
    {
        $kriteria->delete();
        return redirect()->route('kriteria.index')->with('success', 'Kriteria deleted successfully.');
    }
}
