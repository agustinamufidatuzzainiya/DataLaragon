<?php

namespace App\Controllers;

use App\Models\JenisUsaha_model;

class JenisUsaha extends BaseController
{
    public function index()
    {
        $data['title'] = "Jenis Usaha";
        $data['activeMenu'] = "jenisusaha";
        echo view('admin_header', $data);

        $jenis = new JenisUsaha_model();
        $datajenis = $jenis->tampildata();
        $data = array('dataJenis' => $datajenis);
        echo view('jenisusaha_view', $data);

        echo view('admin_footer');
    }
}
