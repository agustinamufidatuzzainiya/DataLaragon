<?php
class Database
{
    private $host = "127.0.0.1";
    private $dbname = "toko_sepeda";
    private $user = "root";
    private $password = "";
    private $port = "3306";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;port=$this->port; dbname=$this->dbname; charset=utf8", $this->user, $this->password);
        } catch (PDOException $e) {
            echo "Koneksi gagal";
        }
    }

    
//////////////>>>>>>>>>> DATABASE UNTUK DATA SEPEDA <<<<<<<<<<//////////////
    public function tampil_semua_data_sepeda()
    {
        $query = $this->conn->prepare("SELECT id_sepeda, id_pemasok, nama, gambar_sepeda, ukuran, jenis, warna, stok, harga FROM sepeda ORDER BY id_sepeda");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        $query->closeCursor();
        unset($data);
    }

    public function tampil_data_sepeda($id_sepeda)
    {
        $query = $this->conn->prepare("SELECT id_sepeda, id_pemasok, nama, gambar_sepeda, ukuran, jenis, warna, stok, harga FROM sepeda WHERE id_sepeda=?");
        $query->execute(array($id_sepeda));
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data;
        $query->closeCursor();
        unset($id_sepeda, $data);
    }

    public function tambah_data_sepeda($data)
    {
        $query = $this->conn->prepare("INSERT IGNORE INTO sepeda (id_sepeda, id_pemasok, nama, gambar_sepeda, ukuran, jenis, warna, stok, harga) VALUES (?,?,?,?,?,?,?,?,?)");
        $query->execute(
            array(
                $data['id_sepeda'],
                $data['id_pemasok'],
                $data['nama'],
                $data['gambar_sepeda'],
                $data['ukuran'],
                $data['jenis'],
                $data['warna'],
                $data['stok'],
                $data['harga']
            )
        );
        $query->closeCursor();
        unset($data);
    }

    public function ubah_data_sepeda($data)
    {
        $query = $this->conn->prepare("UPDATE sepeda SET id_pemasok=?, nama=?, gambar_sepeda=?, ukuran=?, jenis=?, warna=?, stok=?, harga=? WHERE id_sepeda=?");
        $query->execute(
            array(
                $data['id_pemasok'],
                $data['nama'],
                $data['gambar_sepeda'],
                $data['ukuran'],
                $data['jenis'],
                $data['warna'],
                $data['stok'],
                $data['harga'],
                $data['id_sepeda']
            )
        );
        $query->closeCursor();
        unset($data);
    }

    public function hapus_data_sepeda($id_sepeda)
    {
        $query = $this->conn->prepare("DELETE FROM sepeda WHERE id_sepeda=?");
        $query->execute(array($id_sepeda));
        $query->closeCursor();
        unset($id_sepeda);
    }

//////////////>>>>>>>>>> DATABASE UNTUK DATA PEMASOK <<<<<<<<<<////////////// 
    public function tampil_semua_data_pemasok()
    {
        $query = $this->conn->prepare("SELECT id_pemasok, nama_pemasok, jenis_kelamin, alamat, no_telp FROM pemasok ORDER BY id_pemasok");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        $query->closeCursor();
        unset($data);
    }
    
    public function tampil_data_pemasok($id_pemasok)
    {
        $query = $this->conn->prepare("SELECT id_pemasok, nama_pemasok, jenis_kelamin, alamat, no_telp FROM pemasok WHERE id_pemasok=?");
        $query->execute(array($id_pemasok));
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data;
        $query->closeCursor();
        unset($id_pemasok, $data);
    }

    public function tambah_data_pemasok($data)
    {
        $query = $this->conn->prepare("INSERT IGNORE INTO pemasok (id_pemasok, nama_pemasok, jenis_kelamin, alamat, no_telp) VALUES (?,?,?,?,?)");
        $query->execute(
            array(
                $data['id_pemasok'],
                $data['nama_pemasok'],
                $data['jenis_kelamin'],
                $data['alamat'],
                $data['no_telp']
            )
        );
        $query->closeCursor();
        unset($data);
    }

    public function ubah_data_pemasok($data)
    {
        $query = $this->conn->prepare("UPDATE pemasok SET id_pemasok=?, nama_pemasok=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id_pemasok=?");
        $query->execute(
            array(
                $data['id_pemasok'],
                $data['nama_pemasok'],
                $data['jenis_kelamin'],
                $data['alamat'],
                $data['no_telp'],
                $data['id_pemasok']
            )
        );
        $query->closeCursor();
        unset($data);
    }

    public function hapus_data_pemasok($id_pemasok)
    {
        $query = $this->conn->prepare("DELETE FROM pemasok WHERE id_pemasok=?");
        $query->execute(array($id_pemasok));
        $query->closeCursor();
        unset($id_pemasok);
    }

//////////////>>>>>>>>>> DATABASE UNTUK DATA TRANSAKSI <<<<<<<<<<//////////////
    public function tampil_semua_data_transaksi()
    {
        $query = $this->conn->prepare("SELECT id_transaksi, id_sepeda, id_pemasok, tanggal_transaksi, jumlah_barang, total_harga FROM transaksi ORDER BY id_transaksi");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        $query->closeCursor();
        unset($data);
    }

    public function tampil_data_transaksi($id_transaksi)
    {
        $query = $this->conn->prepare("SELECT id_transaksi, id_sepeda, id_pemasok, tanggal_transaksi, jumlah_barang, total_harga FROM transaksi WHERE id_transaksi=?");
        $query->execute(array($id_transaksi));
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data;
        $query->closeCursor();
        unset($id_transaksi, $data);
    }

    public function tambah_data_transaksi($data)
    {
        $query = $this->conn->prepare("INSERT IGNORE INTO transaksi (id_transaksi, id_sepeda, id_pemasok, tanggal_transaksi, jumlah_barang, total_harga) VALUES (?,?,?,?,?,?)");
        $query->execute(
            array(
                $data['id_transaksi'],
                $data['id_sepeda'],
                $data['id_pemasok'],
                $data['tanggal_transaksi'],
                $data['jumlah_barang'],
                $data['total_harga']
            )
        );
        $query->closeCursor();
        unset($data);
    }

    public function ubah_data_transaksi($data)
    {
        $query = $this->conn->prepare("UPDATE transaksi SET id_transaksi=?, id_sepeda=?, id_pemasok=?, tanggal_transaksi=?, jumlah_barang=?, total_harga=? WHERE id_transaksi=?");
        $query->execute(
            array(
                $data['id_transaksi'],
                $data['id_sepeda'],
                $data['id_pemasok'],
                $data['tanggal_transaksi'],
                $data['jumlah_barang'],
                $data['total_harga'],
                $data['id_transaksi']
            )
        );
        $query->closeCursor();
        unset($data);
    }

    public function hapus_data_transaksi($id_transaksi)
    {
        $query = $this->conn->prepare("DELETE FROM transaksi WHERE id_transaksi=?");
        $query->execute(array($id_transaksi));
        $query->closeCursor();
        unset($id_transaksi);
    }
}
?>