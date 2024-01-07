<?php

namespace App\Controllers;

use App\Models\DataBobot_model;

class DataBobot extends BaseController
{
    public function index()
    {
        $data['title'] = "Data Bobot";
        $data['activeMenu'] = "databobot";
        echo view('admin_header', $data);

        $bobot = new DataBobot_model();
        $databobot = $bobot->tampildata();
        $data = array('dataBobot' => $databobot);
        echo View('databobot_view', $data);

        echo view('admin_footer');
    }
}
