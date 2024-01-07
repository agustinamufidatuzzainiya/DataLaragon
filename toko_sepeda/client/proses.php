<?php
include "Client.php";

//////////////>>>>> PROSES DATA SEPEDA <<<<<///////////////
if ($_POST['aksi'] == 'tambah-sepeda') 
{
    $data = array(
        "id_sepeda" => $_POST['id_sepeda'],
        "id_pemasok" => $_POST['id_pemasok'],
        "nama" => $_POST['nama'],
        "gambar_sepeda" => $_POST['gambar_sepeda'],
        "ukuran" => $_POST['ukuran'],
        "jenis" => $_POST['jenis'],
        "warna" => $_POST['warna'],
        "stok" => $_POST['stok'],
        "harga" => $_POST['harga'],
        "aksi" => $_POST['aksi']
    );
    $abc->tambah_data_sepeda($data);
    header('location:index.php?page=daftar-data-sepeda');
} 

else if ($_POST['aksi'] == 'ubah-sepeda') 
{
    $data = array(
        "id_sepeda" => $_POST['id_sepeda'],
        "id_pemasok" => $_POST['id_pemasok'],
        "nama" => $_POST['nama'],
        "gambar_sepeda" => $_POST['gambar_sepeda'],
        "ukuran" => $_POST['ukuran'],
        "jenis" => $_POST['jenis'],
        "warna" => $_POST['warna'],
        "stok" => $_POST['stok'],
        "harga" => $_POST['harga'],
        "aksi" => $_POST['aksi']
    );
    $abc->ubah_data_sepeda($data);
    header('location:index.php?page=daftar-data-sepeda');} 

else if ($_GET['aksi'] == 'hapus-sepeda') 
{
    $data = array(
        "id_sepeda" => $_GET['id_sepeda'],
        "aksi" => $_GET['aksi']
    );
    $abc->hapus_data_sepeda($data);
    header('location:index.php?page=daftar-data-sepeda');}

//////////////>>>>> PROSES DATA PEMASOK <<<<<///////////////
else if ($_POST['aksi'] == 'tambah-pemasok') 
{
    $data = array(
        "id_pemasok" => $_POST['id_pemasok'],
        "nama_pemasok" => $_POST['nama_pemasok'],
        "jenis_kelamin" => $_POST['jenis_kelamin'],
        "alamat" => $_POST['alamat'],
        "no_telp" => $_POST['no_telp'],
        "aksi" => $_POST['aksi']
    );
    $abc->tambah_data_pemasok($data);
    header('location:index.php?page=daftar-data-pemasok');
} 

else if ($_POST['aksi'] == 'ubah-pemasok') 
{
    $data = array(
        "id_pemasok" => $_POST['id_pemasok'],
        "nama_pemasok" => $_POST['nama_pemasok'],
        "jenis_kelamin" => $_POST['jenis_kelamin'],
        "alamat" => $_POST['alamat'],
        "no_telp" => $_POST['no_telp'],
        "aksi" => $_POST['aksi']
    );
    $abc->ubah_data_pemasok($data);
    header('location:index.php?page=daftar-data-pemasok');
}

else if ($_GET['aksi'] == 'hapus-pemasok') 
{
    $data = array(
        "id_pemasok" => $_GET['id_pemasok'],
        "aksi" => $_GET['aksi']
    );
    $abc->hapus_data_pemasok($data);
    header('location:index.php?page=daftar-data-pemasok');
}

//////////////>>>>> PROSES DATA TRANSAKSI <<<<<///////////////
else if ($_POST['aksi'] == 'tambah-transaksi') 
{
    $data = array(
        "id_transaksi" => $_POST['id_transaksi'],
        "id_sepeda" => $_POST['id_sepeda'],
        "id_pemasok" => $_POST['id_pemasok'],
        //"tanggal_transaksi" => $_POST['tanggal_transaksi'],
        "jumlah_barang" => $_POST['jumlah_barang'],
        "total_harga" => $_POST['total_harga'],
        "aksi" => $_POST['aksi']
    );
    $abc->tambah_data_transaksi($data);
    header('location:index.php?page=daftar-data-transaksi');
} 

else if ($_POST['aksi'] == 'ubah-transaksi') 
{
    $data = array(
        "id_transaksi" => $_POST['id_transaksi'],
        "id_sepeda" => $_POST['id_sepeda'],
        "id_pemasok" => $_POST['id_pemasok'],
        //"tanggal_transaksi" => date('Y-m-d H:i:s', strtotime($_POST['tanggal_transaksi'])),
        "jumlah_barang" => $_POST['jumlah_barang'],
        "total_harga" => $_POST['total_harga'],
        "aksi" => $_POST['aksi']
    );
    $abc->ubah_data_transaksi($data);
    header('location:index.php?page=daftar-data-transaksi');
} 

else if ($_GET['aksi'] == 'hapus-transaksi')
{
    $data = array(
        "id_transaksi" => $_GET['id_transaksi'],
        "aksi" => $_GET['aksi']
    );
    $abc->hapus_data_transaksi($data);
    header('location:index.php?page=daftar-data-transaksi');
}

unset($abc, $data);
?>