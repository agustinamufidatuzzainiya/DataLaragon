<?php

namespace App\Controllers;

use App\Models\data_model;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = "dashboard";
        $data['activeMenu'] = "dashboard";

        echo view("admin_header");
        echo view("admin_navigasi");
        
    }


}
