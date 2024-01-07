<?php
include "connection.php";
$user = $_POST['username'];
$psw = md5($_POST['password']);
$psw2 = md5($_POST['psw2']);
$name = $_POST['namalengkap'];
$email = $_POST['email'];
$level = $_POST['level'];

if($psw!=$psw2){
    echo "<script>alert('Ulangi, Password Anda tidak sama')</script>";
    echo "<script>document.location.href='form_register.php'</script>";
   } else{
    $sql="INSERT INTO register(username, password, namalengkap, email, level) VALUES ('".$user."', '".$psw."', '".$name."', '".$email."', '".$level."')";
    $query=$koneksi->query($sql);
    if($query){
        $_SESSION['pesan'] = ['status' => 'success', 'isi' => 'Anda Sukses Registrasi'];
    echo "<script>alert('Anda Sukses Registrasi')</script>";
    echo "<script>document.location.href='form_login.php'</script>";
 } else{
    $_SESSION['pesan'] = ['status' => 'danger', 'isi' => 'Anda Gagal Registrasi'];
    header('location: form_register.php');
 }
}
?>
