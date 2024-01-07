<?php

namespace App\Models;

use CodeIgniter\Model;

class Dataoptimasi_model extends Model
{
    protected $table = 'konversi_penilaian';
    protected $primaryKey = 'id_konversi';
    protected $allowedFields = ['nama_aplikasi', 'C1', 'C2', 'C3', 'C4'];

    public function carioptimasi()
    {
        // Ambil data dari tabel konversi_penilaian
        $data = $this->findAll();

        // Ambil nilai kriteria dari tabel data_kriteria
        $db = \Config\Database::connect();
        $kriteriaQuery = $db->query('SELECT * FROM data_kriteria');
        $nilaiKriteria = $kriteriaQuery->getResultArray();

        // Hitung total kuadrat untuk normalisasi
        $total_kuadrat = [];
        foreach ($data as $row) {
            $total_kuadrat['C1'] = isset($total_kuadrat['C1']) ? $total_kuadrat['C1'] + pow($row['C1'], 2) : pow($row['C1'], 2);
            $total_kuadrat['C2'] = isset($total_kuadrat['C2']) ? $total_kuadrat['C2'] + pow($row['C2'], 2) : pow($row['C2'], 2);
            $total_kuadrat['C3'] = isset($total_kuadrat['C3']) ? $total_kuadrat['C3'] + pow($row['C3'], 2) : pow($row['C3'], 2);
            $total_kuadrat['C4'] = isset($total_kuadrat['C4']) ? $total_kuadrat['C4'] + pow($row['C4'], 2) : pow($row['C4'], 2);
        }

        // Hitung normalisasi Moora dengan nilai kriteria
        $result = [];
        foreach ($data as $row) {
            $result[] = array(
                'nama_aplikasi' => $row['nama_aplikasi'],
                'C1' => number_format(($row['C1'] / sqrt($total_kuadrat['C1'])) * $nilaiKriteria[0]['nilai_kriteria'], 8, ',', ''),
                'C2' => number_format(($row['C2'] / sqrt($total_kuadrat['C2'])) * $nilaiKriteria[1]['nilai_kriteria'], 8, ',', ''),
                'C3' => number_format(($row['C3'] / sqrt($total_kuadrat['C3'])) * $nilaiKriteria[2]['nilai_kriteria'], 8, ',', ''),
                'C4' => number_format(($row['C4'] / sqrt($total_kuadrat['C4'])) * $nilaiKriteria[3]['nilai_kriteria'], 8, ',', ''),
            );
        }

        return $result;
    }
}
