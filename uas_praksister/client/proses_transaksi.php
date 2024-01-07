<?php
include "Client_transaksi.php";

if ($_POST['aksi'] == 'tambah-transaksi') 
{
    $data = array(
        "id_transaksi" => $_POST['id_transaksi'],
        "id_sepeda" => $_POST['id_sepeda'],
        "id_pemasok" => $_POST['id_pemasok'],
        "tanggal_transaksi" => $_POST['tanggal_transaksi'],
        "jumlah_barang" => $_POST['jumlah_barang'],
        "total_harga" => $_POST['total_harga'],
        "aksi" => $_POST['aksi']
    );
    $abc->tambah_data_transaksi($data);
    header('location:../menu/menu_transaksi.php');
} 

else if ($_POST['aksi'] == 'ubah-transaksi') 
{
    $data = array(
        "id_transaksi" => $_POST['id_transaksi'],
        "id_sepeda" => $_POST['id_sepeda'],
        "id_pemasok" => $_POST['id_pemasok'],
        "tanggal_transaksi" => $_POST['tanggal_transaksi'],
        //"tanggal_transaksi" => date('Y-m-d H:i:s', strtotime($_POST['tanggal_transaksi'])),
        "jumlah_barang" => $_POST['jumlah_barang'],
        "total_harga" => $_POST['total_harga'],
        "aksi" => $_POST['aksi']
    );
    $abc->ubah_data_transaksi($data);
    header('location:../menu/menu_transaksi.php');
} 

else if ($_GET['aksi'] == 'hapus-transaksi')
{
    $data = array(
        "id_transaksi" => $_GET['id_transaksi'],
        "aksi" => $_GET['aksi']
    );
    $abc->hapus_data_transaksi($data);
    header('location:../menu/menu_transaksi.php');
}

unset($abc, $data);
?>