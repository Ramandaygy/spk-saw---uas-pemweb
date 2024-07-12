<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alternatifs = Alternatif::all();
        $title = 'Alternatif';
        return view('alternatif.index', compact('title', 'alternatifs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create New Alternatif';
        return view('alternatif.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alternatif = new Alternatif();
        $alternatif->id_alternatif = $request->input('id_alternatif');
        $alternatif->nama_alternatif = $request->input('nama_alternatif');
        $alternatif->save();
        return redirect()->route('alternatif.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alternatif $alternatif)
    {
        return view('alternatif.show', compact('alternatif'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alternatif $alternatif)
{
    $title = 'Edit Alternatif'; // Atur judul halaman sesuai kebutuhan

    return view('alternatif.edit', compact('alternatif', 'title'));
}

    



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alternatif $alternatif)
{
    $request->validate([
        'nama_alternatif' => 'required',
    ]);

    $alternatif->nama_alternatif = $request->input('nama_alternatif');
    $alternatif->save();

    return redirect()->route('alternatif.index')->with('success', 'Alternatif updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    // app/Http/Controllers/AlternatifController.php

    public function destroy($id_alternatif)
    {
        $alternatif = Alternatif::findOrFail($id_alternatif);
        $alternatif->delete();
        return redirect()->route('alternatif.index')->with('success', 'Alternatif deleted successfully.');
    }

}
