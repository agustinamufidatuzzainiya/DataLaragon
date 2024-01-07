<?php

namespace App\Http\Controllers;

use App\Models\Muslimah;
use Illuminate\Http\Request;

class MuslimahController extends Controller
{
    /**
     * Fungsi Index untuk menampilkan data semua Muslimah
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $muslimah = Muslimah::all();

        if ($request->is('api/*')) {
            // Jika permintaan dari API, kirimkan sebagai JSON
            return response()->json($muslimah);
        } else {
            // Jika permintaan biasa, tampilkan sebagai tampilan HTML
            return view('muslimah.index', compact('muslimah'));
        }
    }


    public function create(Request $request)
    {
        // Mengambil ID selanjutnya
        $nextId = Muslimah::max('id') + 1;

        // Membuat objek Muslimah baru
        $muslimah = new Muslimah();
        $muslimah->merk = $request->input('merk');
        $muslimah->gambar = $request->input('gambar');
        $muslimah->jenis = $request->input('jenis');
        $muslimah->detail = $request->input('detail');
        $muslimah->harga = $request->input('harga');
        $muslimah->save();

        // Redirect ke halaman index
        return redirect()->route('muslimah.index');
    }


    public function edit($id)
    {
        $muslimah = Muslimah::find($id);
        return view('muslimah.edit', compact('muslimah'));
    }

    public function update(Request $request, $id)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'merk' => 'required',
            // ... aturan validasi lainnya ...
        ]);

        // Ambil data muslimah berdasarkan ID
        $muslimah = Muslimah::find($id);

        // Update data muslimah dengan data dari formulir
        $muslimah->merk = $request->input('merk');
        $muslimah->gambar = $request->input('gambar');
        $muslimah->jenis = $request->input('jenis');
        $muslimah->detail = $request->input('detail');
        $muslimah->harga = $request->input('harga');

        // Simpan perubahan ke database
        $muslimah->save();

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect('/muslimah')->with('success', 'Data modest haven berhasil diubah.');
    }

    public function destroy($id)
    {
        $muslimah = Muslimah::find($id);
        $muslimah->delete();

        return redirect('/muslimah')->with('success', 'modest heaven deleted successfully');
    }

    public function show($id){
        $muslimah = Muslimah::find($id);

        if (!$muslimah) {
            return redirect('/muslimah')->with('error', 'modest haven not found');
        }

        return response()->json($muslimah);
    }
}
