<?php
include "Client_pemasok.php";

if ($_POST['aksi'] == 'tambah-pemasok') 
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
    header('location:../menu/menu_pemasok.php');
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
    header('location:../menu/menu_pemasok.php');
}

else if ($_GET['aksi'] == 'hapus-pemasok') 
{
    $data = array(
        "id_pemasok" => $_GET['id_pemasok'],
        "aksi" => $_GET['aksi']
    );
    $abc->hapus_data_pemasok($data);
    header('location:../menu/menu_pemasok.php');
}
unset($abc, $data);
?>