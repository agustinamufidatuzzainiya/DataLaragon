<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKriteria_model extends Model
{
    protected $table = 'data_bobot';

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        $dataquery = $this->db->query("select * from data_bobot");
        return $dataquery->getResult();
    }

}
