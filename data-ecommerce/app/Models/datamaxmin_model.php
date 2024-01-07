<?php

namespace App\Models;

use CodeIgniter\Model;

class Datamaxmin_model extends Model
{
    // Menyimpan nama tabel di database yang akan diakses oleh model ini (konversi_penilaian).
    protected $table = 'konversi_penilaian';

    //Menyimpan nama kolom yang merupakan primary key pada tabel (id_konversi).
    protected $primaryKey = 'id_konversi';

    //Menyimpan daftar field yang diizinkan untuk diisi dalam model ini (nama_aplikasi, C1, C2, C3, C4).
    protected $allowedFields = ['nama_aplikasi', 'C1', 'C2', 'C3', 'C4'];

    public function hitungmaxmin()
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
                'C1' => str_replace(',', '.', number_format(($row['C1'] / sqrt($total_kuadrat['C1'])) * $nilaiKriteria[0]['nilai_kriteria'], 8, ',', '')),
                'C2' => str_replace(',', '.', number_format(($row['C2'] / sqrt($total_kuadrat['C2'])) * $nilaiKriteria[1]['nilai_kriteria'], 8, ',', '')),
                'C3' => str_replace(',', '.', number_format(($row['C3'] / sqrt($total_kuadrat['C3'])) * $nilaiKriteria[2]['nilai_kriteria'], 8, ',', '')),
                'C4' => str_replace(',', '.', number_format(($row['C4'] / sqrt($total_kuadrat['C4'])) * $nilaiKriteria[3]['nilai_kriteria'], 8, ',', '')),
            );
        }
        // Hitung nilai max, min, dan Y
        $max_values = [];
        $min_values = [];
        $result_y = [];

        foreach ($result as $row) {
            $max_values[] = $row['C1'] + $row['C2'] + $row['C4'];
            $min_values[] = $row['C3'];
        }

        $max = str_replace('.', ',', number_format(max($max_values), 8, '.', ''));
        $min = str_replace('.', ',', number_format(min($min_values), 8, '.', ''));

        // menyimpan data ke variabel result_y
        foreach ($result as $row) {
            $result_y[] = array(
                'nama_aplikasi' => $row['nama_aplikasi'],
                'max' => str_replace('.', ',', number_format($row['C1'] + $row['C2'] + $row['C4'], 8, '.', '')),
                'min' => str_replace('.', ',', number_format($row['C3'], 8, '.', '')),
                'Y' => str_replace('.', ',', number_format(($row['C1'] + $row['C2'] + $row['C4']) - $row['C3'], 8, '.', '')),
            );
        }

        return $result_y;
    }
}
