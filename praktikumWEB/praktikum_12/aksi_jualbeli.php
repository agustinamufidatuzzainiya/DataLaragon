<?php
include "../connection.php";
    $merek = $_POST['merek'];
    $jenis = $_POST['jenis'];
    $user = $_POST['user'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];

    $sql="INSERT INTO tbl_jualbeli (jenis, id_minuman, username, tanggal, jumlah)
            VALUES ('".$jenis."','".$merek."','".$user."','".$tanggal."', '".$jumlah."')";
    $query=$koneksi->query($sql);
    if ($query === true) {
        header('location: ../home.php');
    } else {
        echo "erooooooorrrr";
    }
?>