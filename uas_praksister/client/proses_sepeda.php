<?php
include "Client_sepeda.php";

if ($_POST['aksi'] == 'tambah-sepeda') 
{
    $data = array(
        "id_sepeda" => $_POST['id_sepeda'],
        "id_pemasok" => $_POST['id_pemasok'],
        // "nama_pemasok" => $_POST['nama_pemasok'],
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
    header('location:../menu/menu_sepeda.php');
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
    header('location:../menu/menu_sepeda.php');
} 

else if ($_GET['aksi'] == 'hapus-sepeda') 
{
    $data = array(
        "id_sepeda" => $_GET['id_sepeda'],
        "aksi" => $_GET['aksi']
    );
    $abc->hapus_data_sepeda($data);
    header('location:../menu/menu_sepeda.php');
}
unset($abc, $data);
?>