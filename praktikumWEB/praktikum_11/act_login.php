<?php
session_start();
include "connection.php";
$user = $_POST['username'];
$psw = md5($_POST['psw']);
$op = $_GET['op'];

if($op=="in"){
    $sql = "SELECT * FROM register WHERE username='$user' AND password='$psw'";
    $query=$koneksi->query($sql);
    if(mysqli_num_rows($query)==1){
        $d_1 = $query->fetch_array();
        $_SESSION['username'] = $d_1['username'];
        $_SESSION['level'] = $d_1['level'];
    if($d_1['level']=="Admin") {
        header('location:home.php');
        //echo "admin"
    } elseif ($d_1['level']=="Mahasiswa") {
        header('location:home.php');
        //echo "mahasiswa"
    } elseif ($d_1['level']=="Dosen") {
        header('location:home.php');
        //echo "dosen"
} else {
    die("password salah <a href=\'javascript:history.back()\'>kembali</a>");
    }
}
}elseif ($op=="out") {
    unset($_SESSION["username"]);
    unset($_SESSION["level"]);
    header("location:form_login.php");
}
?>
