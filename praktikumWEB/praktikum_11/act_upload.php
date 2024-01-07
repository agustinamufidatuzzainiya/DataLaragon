<?php
if (isset($_POST["submit"])) {
 $tgl = $_POST["tgl"];
 $des = $_POST["deskripsi"];
 $nama_tmp = $_FILES['berkas']['tmp_name'];
 $nama = $_FILES['berkas']['name'];
 $size = $_FILES['berkas']['size'];
 $tipe = $_FILES['berkas']['type'];
 $ekstensiValid = ['jpg', 'jpeg', 'png', 'docx', 'doc', 'pdf'];
$ekstensi = explode('.', $nama);
$ekstensi = strtolower(end($ekstensi));
if(!in_array($ekstensi, $ekstensiValid) ) {
    echo "<script>alert('Pastikan File Berekstensi (jpg, jpeg, png, docx, doc, atau pdf) !')</script>";
    echo "<script>document.location.href='form_upload.php'</script>";
} if ($size > 1000000) {
    echo "<script>alert('Max File Size 1MB')</script>";
    echo "<script>document.location.href='form_upload.php'</script>";
}
$place = 'file/' . $nama;
if (file_exists($place)) {
    echo "<script>alert('Duplikat Nama File!')</script>";
    echo "<script>document.location.href='form_upload.php'</script>";
} else {
    move_uploaded_file($nama_tmp, $place);
    echo "<script>alert('Berhasil Upload File')</script>";
    include 'connection.php';
    $qq = $koneksi->query("INSERT INTO document VALUES (NULL, '$tgl', '$des', '$place', '$nama', '$ekstensi', '$size') ");
} if ($qq) {
    echo "<script>alert('Berhasil Diinput')</script>";
} if(!in_array($ekstensi, $ekstensiValid) ) {
    echo "<script>alert('Pastikan File Berekstensi (jpg, jpeg, png, docx, doc, atau pdf) !')</script>";
    echo "<script>document.location.href='form_upload.php'</script>";
} if ($size > 1000000) {
 echo "<script>alert('Max File Size 1MB')</script>";
 echo "<script>document.location.href='form_upload.php'</script>";
}
}
?>