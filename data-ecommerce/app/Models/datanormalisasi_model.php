<?php

namespace App\Models;

use CodeIgniter\Model;

class Datanormalisasi_model extends Model
{
    protected $table = 'konversi_penilaian';
    protected $primaryKey = 'id_konversi';
    protected $allowedFields = ['nama_aplikasi', 'C1', 'C2', 'C3', 'C4'];

    public function carinormalisasi()
    {
        $data = $this->findAll(); // Ambil semua data dari tabel konversi_penilaian

        // Hitung total kuadrat untuk normalisasi
        $total_kuadrat = array();
        foreach ($data as $row) {
            $total_kuadrat['C1'] = isset($total_kuadrat['C1']) ? $total_kuadrat['C1'] + pow($row['C1'], 2) : pow($row['C1'], 2);
            $total_kuadrat['C2'] = isset($total_kuadrat['C2']) ? $total_kuadrat['C2'] + pow($row['C2'], 2) : pow($row['C2'], 2);
            $total_kuadrat['C3'] = isset($total_kuadrat['C3']) ? $total_kuadrat['C3'] + pow($row['C3'], 2) : pow($row['C3'], 2);
            $total_kuadrat['C4'] = isset($total_kuadrat['C4']) ? $total_kuadrat['C4'] + pow($row['C4'], 2) : pow($row['C4'], 2);
        }

        // Hitung normalisasi Moora
        $result = array();
        foreach ($data as $row) {
            $result[] = array(
                'id_konversi' => $row['id_konversi'],
                'nama_aplikasi' => $row['nama_aplikasi'],
                'C1' => number_format($row['C1'] / sqrt($total_kuadrat['C1']), 9, ',', ''),
                'C2' => number_format($row['C2'] / sqrt($total_kuadrat['C2']), 9, ',', ''),
                'C3' => number_format($row['C3'] / sqrt($total_kuadrat['C3']), 9, ',', ''),
                'C4' => number_format($row['C4'] / sqrt($total_kuadrat['C4']), 9, ',', ''),
            );
        }

        return $result;
    }
}
