<?php
namespace App\Models;
Use CodeIgniter\Model;

class Mahasiswa_model extends Model
{
    protected $table = 'tbl_mahasiswa';
    function construct()
    {
        $this->db = db_connect();
    }
    
    function saveMhs($tabel, $data)
    {
        $this->db->table ($tabel)->insert($data);
        return true;
    }

    function tampildata()
    {
        $dataquery = $this->db->query("select * from tbl_mahasiswa");
        return $dataquery -> getResult();
    }

    public function getMhs($id)
    {
        $dataquery = $this->db->query("select * from tbl_mahasiswa where id_mhs=".$id);
        return $dataquery->getResult();
    }

    function prosesEditMhs($table,$data,$where)
    {
        $this->db->table($table)->update($data,$where);
        return true;
    }

    function hapusMhs($id)
    {
        $dataquery = $this->db->query("delete from tbl_mahasiswa where id_mhs=" . $id);
        return true;
    }
}
