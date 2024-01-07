<?php

namespace App\Http\Controllers;

use App\Models\Western;
use Illuminate\Http\Request;

class WesternController extends Controller
{
    /**
     * Fungsi Index untuk menampilkan data semua Western
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $western = Western::all();

        if ($request->is('api/*')) {
            // Jika permintaan dari API, kirimkan sebagai JSON
            return response()->json($western);
        } else {
            // Jika permintaan biasa, tampilkan sebagai tampilan HTML
            return view('western.index', compact('western'));
        }
    }


    public function create(Request $request)
    {
        // Mengambil ID selanjutnya
        $nextId = Western::max('id') + 1;

        // Membuat objek Western baru
        $western = new Western();
        $western->merk = $request->input('merk');
        $western->gambar = $request->input('gambar');
        $western->jenis = $request->input('jenis');
        $western->detail = $request->input('detail');
        $western->harga = $request->input('harga');
        $western->save();

        // Redirect ke halaman index
        return redirect()->route('western.index');
    }


    public function edit($id)
    {
        $western = Western::find($id);
        return view('western.edit', compact('western'));
    }

    public function update(Request $request, $id)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'merk' => 'required',
            // ... aturan validasi lainnya ...
        ]);

        // Ambil data western berdasarkan ID
        $western = Western::find($id);

        // Update data western dengan data dari formulir
        $western->merk = $request->input('merk');
        $western->gambar = $request->input('gambar');
        $western->jenis = $request->input('jenis');
        $western->detail = $request->input('detail');
        $western->harga = $request->input('harga');

        // Simpan perubahan ke database
        $western->save();

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect('/western')->with('success', 'Data urban elegance berhasil diubah.');
    }

    public function destroy($id)
    {
        $western = Western::find($id);
        $western->delete();

        return redirect('/western')->with('success', 'urban elegance deleted successfully');
    }
    
    public function show($id){
        $western = Western::find($id);

        if (!$western) {
            return redirect('/western')->with('error', 'urban elegance not found');
        }

        return response()->json($western);
    }
}
