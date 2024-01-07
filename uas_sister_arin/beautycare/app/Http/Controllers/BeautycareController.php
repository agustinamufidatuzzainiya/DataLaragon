<?php

namespace App\Http\Controllers;

use App\Models\Beautycare;
use Illuminate\Http\Request;

class BeautycareController extends Controller
{
    /**
     * Fungsi Index untuk menampilkan data semua Laptop
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request)
     {
         $beautycares = Beautycare::all();
 
         if ($request->is('api/*')) {
             // Jika permintaan dari API, kirimkan sebagai JSON
             return response()->json($beautycares);
         } else {
             // Jika permintaan biasa, tampilkan sebagai tampilan HTML
             return view('beautycare.index', compact('beautycares'));
         }
     }
 
 
     public function create(Request $request)
     {
         // Mengambil ID selanjutnya
         $nextId = Beautycare::max('id') + 1;
     
         // Membuat objek Bodycare baru
         $beautycare = new Beautycare();
         $beautycare->merk = $request->merk;
         $beautycare->gambar = $request->gambar;
         $beautycare->jenis = $request->jenis;
         $beautycare->detail = $request->detail;
         $beautycare->harga = $request->harga;
         $beautycare->save();
     
         // Redirect ke halaman index
         return redirect()->route('beautycare.index');
     }
     
 
     public function edit($id)
     {
         $beautycare = Beautycare::find($id);
         return view('beautycare.edit', compact('beautycare'));
     }
 
     public function update(Request $request, $id)
     {
         // Validasi request jika diperlukan
         $request->validate([
             'merk' => 'required',
             // ... aturan validasi lainnya ...
         ]);
 
         // Ambil data beautycare berdasarkan ID
         $beautycare = Beautycare::find($id);
 
         // Update data Bodycare dengan data dari formulir
         $beautycare->merk = $request->merk;
         $beautycare->gambar = $request->gambar;
         $beautycare->jenis = $request->jenis;
         $beautycare->detail = $request->detail;
         $beautycare->harga = $request->harga;
 
         // Simpan perubahan ke database
         $beautycare->save();
 
         // Redirect ke halaman lain atau tampilkan pesan sukses
         return redirect('/beautycare')->with('success', 'Data Beautycare berhasil diubah.');
     }
 
     public function destroy($id)
     {
         $beautycare = Beautycare::find($id);
         $beautycare->delete();
 
         return redirect('/beautycare')->with('success', 'Bodycare deleted successfully');
     }
 }
 
