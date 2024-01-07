<?php
    $myFile ="guestbook.txt";
    $open = fopen ($myFile, 'w') or die ("Can't open file");
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];
    $join = ("$nama; $komentar");
    fwrite ($open, $join);
    fclose($open);
    echo "Data berhasil dikirim";
?>