<?php
    if (isset($_POST['nama'])){
        $nama = $_POST['nama'];
        echo "Halo, " . $nama . "! Selamat datang.";

}else {
        echo "Tidak ada data yang dikirimkan.";
    }
?>