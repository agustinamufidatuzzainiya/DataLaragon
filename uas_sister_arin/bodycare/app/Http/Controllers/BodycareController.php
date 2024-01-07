<?php

namespace App\Http\Controllers;

use App\Models\Bodycare;
use Illuminate\Http\Request;

class BodycareController extends Controller
{

    public function index(Request $request)
    {
        $bodycares = Bodycare::all();

        if ($request->is('api/*')) {
            // Jika permintaan dari API, kirimkan sebagai JSON
            return response()->json($bodycares);
        } else {
            // Jika permintaan biasa, tampilkan sebagai tampilan HTML
            return view('bodycare.index', compact('bodycares'));
        }
    }


    public function create(Request $request)
    {
        // Mengambil ID selanjutnya
        $nextId = Bodycare::max('id') + 1;
    
        // Membuat objek Bodycare baru
        $bodycare = new Bodycare();
        $bodycare->merk = $request->merk;
        $bodycare->gambar = $request->gambar;
        $bodycare->jenis = $request->jenis;
        $bodycare->detail = $request->detail;
        $bodycare->harga = $request->harga;
        $bodycare->save();
    
        // Redirect ke halaman index
        return redirect()->route('bodycare.index');
    }
    

    public function edit($id)
    {
        $bodycare = Bodycare::find($id);
        return view('bodycare.edit', compact('bodycare'));
    }

    public function update(Request $request, $id)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'merk' => 'required',
            // ... aturan validasi lainnya ...
        ]);

        // Ambil data Bodycare berdasarkan ID
        $bodycare = Bodycare::find($id);

        // Update data Bodycare dengan data dari formulir
        $bodycare->merk = $request->merk;
        $bodycare->gambar = $request->gambar;
        $bodycare->jenis = $request->jenis;
        $bodycare->detail = $request->detail;
        $bodycare->harga = $request->harga;

        // Simpan perubahan ke database
        $bodycare->save();

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect('/bodycare')->with('success', 'Data Bodycare berhasil diubah.');
    }

    public function destroy($id)
    {
        $bodycare = Bodycare::find($id);
        $bodycare->delete();

        return redirect('/bodycare')->with('success', 'Bodycare deleted successfully');
    }
}
