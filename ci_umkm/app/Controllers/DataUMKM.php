<?php

namespace App\Controllers;

use App\Models\DataUMKM_model;

class DataUMKM extends BaseController
{
    public function index()
    {
        $data['title'] = "Data UMKM";
        $data['activeMenu'] = "dataumkm";
        echo view('admin_header', $data);

        $umkm = new DataUMKM_model();
        $dataumkm = $umkm->tampildata();
        $data = array('dataUMKM' => $dataumkm);
        echo view('dataumkm_view', $data);

        echo view('admin_footer');
    }
}
