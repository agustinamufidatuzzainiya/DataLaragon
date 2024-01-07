<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisUsaha_model extends Model
{
    protected $table = 'data_jenis_usaha';

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        $dataquery = $this->db->query("select * from data_jenis_usaha");
        return $dataquery->getResult();
    }
}
