<?php

namespace App\Models;

use CodeIgniter\Model;

class DataBobot_model extends Model
{
    protected $table = 'data_kriteria';

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        $dataquery = $this->db->query("select * from data_kriteria");
        return $dataquery->getResult();
    }

}
