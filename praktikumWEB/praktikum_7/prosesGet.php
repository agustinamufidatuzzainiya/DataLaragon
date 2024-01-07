<?php
    if (isset($_GET['nama'])){
        $nama = $_GET['nama'];
        echo "Halo, ".$nama."! Selamat datang.";
    }else {
        echo "Tidak ada data yang dikirimkan.";
    }
    ?>