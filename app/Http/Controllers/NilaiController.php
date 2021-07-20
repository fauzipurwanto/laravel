<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Makul;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Alert;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = nilai::with(['mahasiswa', 'makul'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {      
        $makul = makul::all();
        $mahasiswa = mahasiswa::all();
        return view('nilai.create', compact('makul', 'mahasiswa'));
    }

    public function store(Request $request)
    {
       nilai::create($request->all());
       return redirect()->route('nilai');
    }

    public function edit(Request $request, $id)
    {     
        $makul = makul::all();
        $mahasiswa = mahasiswa::all();
        $nilai = nilai::find($id);
        return view('nilai.edit', compact('nilai', 'makul', 'mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $nilai = nilai::find($id);
        $nilai->update($request->all());
        toast('Yee Berhasil Mengedit Data','success');
        return redirect()->route('nilai');
    }

    public function destroy(Request $request, $id)
    {
        $nilai = nilai::find($id);
        $nilai->delete();
        return redirect()->route('nilai');
    }
}
