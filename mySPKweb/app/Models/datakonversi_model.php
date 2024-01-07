<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakonversi_model extends Model
{
    protected $table = 'konversi_penilaian';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkonversi()
    {
        $dataquery=$this->db->query("select * from konversi_penilaian");
        return $dataquery->getResult();
    }

    function tampilminmax()
    {
       /* $caribenquery=$this->db->query("select kode_kriteria from data_kriteria where tipe_kriteria ='Benefit'");
        $querybenefit=$caribenquery->getResult();
        if ($querybenefit=!0)
        {
          $dataquery1=$this->db->query("select max(C1) as K1, max(C2) as K2, max(C3) as K3 from konversi_penilaian");
           return $rdataquery1=$dataquery1->getResult();
        }
     
        else
        {
            $dataquery1=$this->db->query("select min(C1) as K1, min(C2) as K2, min(C3) as K3 from konversi_penilaian");
            return $rdataquery1=$dataquery1->getResult();
        }*/

        $dataquery1=$this->db->query("select max(C1) as maxminK1, max(C2) as maxminK2, min(C3) as maxminK3 from konversi_penilaian");
        return $rdataquery1=$dataquery1->getResult();
       

    }

    
}