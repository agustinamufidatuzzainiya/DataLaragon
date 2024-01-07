<?php
class Database
{
    private $host = "192.168.56.45";
    private $dbname = "toko";
    private $user = "root";
    private $password = "";
    private $port = "3306";
    private $conn;

    // function yang pertama kali di-load saat class dipanggil
    public function __construct()
    { // koneksi database 
        try {
            $this->conn = new PDO("mysql:host=$this->host;port=$this->port; dbname=$this->dbname; charset=utf8", $this->user, $this->password);
        } catch (PDOException $e) {
            echo "Koneksi gagal";
        }
    }

    public function tampil_semua_data()
    {
        $query = $this->conn->prepare("SELECT id_barang, nama_barang, stok_barang, harga_satuan FROM barang ORDER BY id_barang");
        $query->execute();
        // mengambil banyak data dengan fetchAll
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        $query->closeCursor();
        unset($data);
    }

    public function tampil_data($id_barang)
    {
        $query = $this->conn->prepare("SELECT id_barang, nama_barang, stok_barang, harga_satuan FROM barang WHERE id_barang=?");
        $query->execute(array($id_barang));
        // mengambil satu data dengan fetch
        $data = $query->fetch(PDO::FETCH_ASSOC); // mengembalikan data
        return $data;
        // hapus variable dari memory
        $query->closeCursor();
        unset($id_barang, $data);
    }

    public function tambah_data($data)
    {
        $query = $this->conn->prepare("INSERT IGNORE INTO barang (id_barang, nama_barang, stok_barang, harga_satuan) VALUES (?, ?, ?, ?)");
        $query->execute(array($data['id_barang'], $data['nama_barang'], $data['stok_barang'], $data['harga_satuan']));
        $query->closeCursor();
        unset($data);
    }

    public function ubah_data($data)
    {
        $query = $this->conn->prepare("UPDATE barang SET nama_barang=?, stok_barang=?, harga_satuan=?  WHERE id_barang=?");
        $query->execute(array($data['nama_barang'], $data['stok_barang'], $data['harga_satuan'], $data['id_barang']));
        $query->closeCursor();
        unset($data);
    }

    public function hapus_data($id_barang)
    {
        $query = $this->conn->prepare("DELETE FROM barang WHERE id_barang=?");
        $query->execute(array($id_barang));
        $query->closeCursor();
        unset($id_barang);
    }
}
