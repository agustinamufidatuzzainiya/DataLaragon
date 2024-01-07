<?php

namespace App\Models;

use CodeIgniter\Model;

class Dataperangkingan_model extends Model
{
    protected $table = 'konversi_penilaian'; // Set the database table

    public function tampilranking()
    {
        // Get data from Datamaxmin_model
        $datamaxminModel = new Datamaxmin_model();
        $result_y = $datamaxminModel->hitungmaxmin();

        // Sort the data based on the 'Y' values in descending order
        usort($result_y, function ($a, $b) {
            return $b['Y'] <=> $a['Y'];
        });

        // Add a ranking index to the sorted data
        $ranked_data = [];
        foreach ($result_y as $key => $row) {
            $ranked_data[] = array(
                'nama_aplikasi' => $row['nama_aplikasi'],
                'Y' => $row['Y'],
                'ranking' => $key + 1, // Add 1 because ranking starts from 1, not 0
            );
        }

        return $ranked_data;
    }
}
