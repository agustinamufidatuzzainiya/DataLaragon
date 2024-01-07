<?php

namespace App\Models;

use CodeIgniter\Model;

class data_model extends Model
{
    protected $table = 'data_bobot';

    function __construct()
    {
        $this->db = db_connect();
    }

    // function tampilusaha()
    // {
    //     $dataquery=$this->db->query("select * from jenis_usaha");
    //     return $dataquery->getResult();
    // }

    // function tampilumkm()
    // {
    //     $dataquery=$this->db->query("select * from data_umkm");
    //     return $dataquery->getResult();
    // }

    function tampilkriteria()
    {
        $dataquery = $this->db->query("select * from data_kriteria");
        return $dataquery->getResult();
    }

    function tampilbobot()
    {
        $dataquery = $this->db->query("select * from data_bobot");
        return $dataquery->getResult();
    }

    function tampildetail()
    {
        $dataquery = $this->db->query("select * from data_detail");
        return $dataquery->getResult();
    }
    // public function getDpt($id)
    // {
    //     $dataquery = $this->db->table('jenis_usaha')->where('id_usaha', $id)->get();
    //     return $dataquery->getRow();
    // }
}
