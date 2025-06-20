<?php

namespace App\Http\Controllers;

use App\Models\mapel;
use Illuminate\Http\Request;

class mapelcontroller extends Controller
{
    public function index()
    {
        $mapel = mapel::all();
        return view('admin.mapel.index', [
            'menu' => 'mapel',
            'title' => 'Data mapel',
            'mapel' => $mapel
        ]);
    }

    public function create()
    {

        return view('admin.mapel.create', [
            'menu' => 'mapel',
            'title' => 'Tambah Data mapel',
           
        ]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_mapel' => 'required',
            'jadwal_mapel' => 'required',
        ], [
            'nama_mapel.required' => 'Nama Mapel harus diisi',
            'jadwal_mapel.required' => 'Jadwal Mapel harus diisi',
        ]);

        $mapel = new mapel;
        $mapel->nama_mapel = $validasi['nama_mapel'];
        $mapel->jadwal_mapel = $validasi['jadwal_mapel'];

        $mapel->save();

        return redirect(route('mapel.index'));
    }

    public function edit($id)
    {
        $mapel = mapel::findOrFail($id);
        return view('admin.mapel.edit', [
            'menu' => 'mapel',
            'title' => 'Edit mapel',
            'mapel' => $mapel
        ]);
    }

    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'nama_mapel' => 'required',
            'jadwal_mapel' => 'required',
        ], [
            'nama_mapel.required' => 'Nama Mapel harus diisi',
            'jadwal_mapel.required' => 'Jadwal Mapel harus diisi',
        ]);

        $mapel = mapel::findOrFail($id);
        $mapel->nama_mapel = $validasi['nama_mapel'];
        $mapel->jadwal_mapel = $validasi['jadwal_mapel'];

        $mapel->save();

        return redirect()->route('mapel.index')->with('success', 'Data mapel berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mapel = mapel::findOrFail($id);
        $mapel->delete();

        return redirect(route('mapel.index'))->with('success', 'Data mapel berhasil dihapus');
    }
}
