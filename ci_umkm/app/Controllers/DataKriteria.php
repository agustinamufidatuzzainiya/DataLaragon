<?php

namespace App\Controllers;

use App\Models\DataKriteria_model;

class DataKriteria extends BaseController
{
    public function index()
    {
        $data['title'] = "Data Kriteria";
        $data['activeMenu'] = "datakriteria";
        echo view('admin_header', $data);

        $kriteria = new DataKriteria_model();
        $datakriteria = $kriteria->tampildata();
        $data = array('dataKriteria' => $datakriteria);
        echo view('datakriteria_view', $data);

        echo view('admin_footer');
    }
}
