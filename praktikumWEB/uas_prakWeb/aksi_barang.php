<?php
include "connection.php";
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $sql="INSERT INTO tokoku (id, nama, harga) VALUES ('".$id."','".$nama."', '".$harga."')";
    $query=$koneksi->query($sql);
    if ($query === true) {
        header('location: cari_edit.php');
    } else {
        echo "erooooooorrrr";
    }
?>