<?php 
namespace App\Models;
use CodeIgniter\Model;

class namajenis_model extends Model
{
    protected $table = 'jenis_usaha';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampiljenis()
    {
        $dataquery=$this->db->query("select * from jenis_usaha");
        return $dataquery->getResult();
    }

    
}