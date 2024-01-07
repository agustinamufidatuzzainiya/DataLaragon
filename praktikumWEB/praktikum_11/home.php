<?php
session_start();
include 'connection.php';
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
if (!isset($_SESSION['username'])) {
 die("Anda belum login");
}
$username = $_SESSION['username'];
$level = $_SESSION['level'];
if ($level=="Admin") {
    echo "Selamat Datang " .$level;
    ?>
    <br><br>
    <button onclick="location.href='form_upload.php'">Upload</button>
    <button onclick="location.href='form_download.php'">Download</button><br><br>
    <?php
} elseif ($level=="Mahasiswa") {
    echo "Selamat Datang " .$level;
    ?><br>
    <button onclick="location.href='form_upload.php'">Upload</button>
    <button onclick="location.href='form_download.php'">Download</button><br>
    <?php
} elseif ($level=="Dosen") {
    echo "Selamat Datang " .$level;
    ?><br>
    <button onclick="location.href='form_upload.php'">Upload</button>
    <button onclick="location.href='form_download.php'">Download</button>
    <?php
}
?>
