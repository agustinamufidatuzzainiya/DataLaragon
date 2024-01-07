<?php

namespace App\Controllers;

use App\Models\Mahasiswa_model;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Welcome";
        $data['activeMenu'] = "SPK Penentuan Bantuan UMKM ";
        echo view('admin_header', $data);
        echo view('dashboard_view', $data);
        echo view('admin_footer');
    }

}
