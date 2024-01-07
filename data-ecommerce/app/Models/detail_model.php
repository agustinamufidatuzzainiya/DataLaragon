<?php

namespace App\Models;

use CodeIgniter\Model;

class detail_model extends Model
{
    // class fungsi untuk memanggil data dari database
    protected $table = 'data_detail';

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkriteria()
    {
        $dataquery = $this->db->query("select * from data_detail");
        return $dataquery->getResult();
    }

    public function getDpt($id)
    {
        $dataquery = $this->db->table('data_detail')->where('id_detail', $id)->get();
        return $dataquery->getRow();
    }

    public function insertDetail($data)
    {
        $this->db->table('data_detail')->insert($data);
    }
    public function updateDetail($id, $data)
    {
        // Update data kriteria berdasarkan ID
        $this->db->table('data_detail')->where('id_detail', $id)->update($data);
    }

    public function deleteDetail($id)
    {
        // Hapus data kriteria berdasarkan ID
        $this->db->table('data_detail')->where('id_detail', $id)->delete();
    }
}

