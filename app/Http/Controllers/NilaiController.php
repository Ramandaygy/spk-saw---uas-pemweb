<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Daftar Nilai';
        $nilais = Nilai::all()->groupBy('id_alternatif');
        $kriterias = [];
        foreach (Kriteria::all() as $kriteria) {
            $kriterias[$kriteria->id_kriteria] = $kriteria;
        }
        $alternatifs = [];
        foreach (Alternatif::all() as $alternatif) {
            $alternatifs[$alternatif->id_alternatif] = $alternatif;
        }
        $nilais = [];
        foreach (Nilai::orderBy('id_alternatif')->orderBy('id_kriteria')->get() as $nilai) {
            $nilais[$nilai->id_alternatif][$nilai->id_kriteria] = $nilai->nilai;
        }

        return view('nilai.index', compact('nilais', 'kriterias', 'alternatifs', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alternatifs = Alternatif::all();
        $kriterias = Kriteria::all();
        return view('nilai.create', compact('alternatifs', 'kriterias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'alternatif_id' => 'required|exists:alternatifs,id_alternatif',
            'kriteria_id' => 'required|exists:kriterias,id_kriteria',
            'nilai' => 'required|numeric',
        ]);

        $nilai = new Nilai();
        $nilai->alternatif_id = $request->input('alternatif_id');
        $nilai->kriteria_id = $request->input('kriteria_id');
        $nilai->nilai = $request->input('nilai');
        $nilai->save();

        return redirect()->route('nilai.index')->with('success', 'Nilai created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        $kriterias = Kriteria::all();
        $nilais = Nilai::where('id_alternatif', $id)->get()->keyBy('id_kriteria');

        return view('nilai.show', compact('alternatif', 'kriterias', 'nilais'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_nilai)
    {
        $title = 'Edit Nilai';
        $alternatif = Alternatif::findOrFail($id_nilai);
        $kriterias = Kriteria::all();
        $nilais = Nilai::where('id_alternatif', $id_nilai)->get()->keyBy('id_kriteria');

        return view('nilai.edit', compact('title', 'alternatif', 'kriterias', 'nilais'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_nilai)
    {
        $validated = $request->validate([
            'alternatif_id' => 'required|exists:alternatifs,id_alternatif',
            'nilai' => 'required|array',
            'nilai.*' => 'required|numeric',
        ]);

        foreach ($validated['nilai'] as $id_kriteria => $nilai) {
            $nilaiModel = Nilai::where('id_alternatif', $id_nilai)
                                ->where('id_kriteria', $id_kriteria)
                                ->first();
            
            if ($nilaiModel) {
                $nilaiModel->update(['nilai' => $nilai]);
            } else {
                Nilai::create([
                    'id_alternatif' => $id_nilai,
                    'id_kriteria' => $id_kriteria,
                    'nilai' => $nilai,
                ]);
            }
        }

        return redirect()->route('nilai.index')->with('success', 'Nilai updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nilai = Nilai::where('id_alternatif', $id)->firstOrFail();
        $nilai->delete();
        return redirect()->route('nilai.index')->with('success', 'Nilai deleted successfully.');
    }
}
