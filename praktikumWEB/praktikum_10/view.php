<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Buku Tamu</title>
</head>
<body>
    <h1>Daftar Buku Tamu</h1>
<table>
    <tr>
        <th>No</th>
        <th>ID Buku Tamu</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Komentar</th>
    </tr>
<?php
$no = 1; include "koneksi.php";
$query = "SELECT * FROM bukutamu"; $result = $koneksi->query($query);
while ($row = $result->fetch_array()) { ?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $row['id_bukutamu']; ?>
</td> 
<td>
    <?php echo $row['nama']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['komentar']; ?></td>
</tr> <?php } ?>
</table>
</body>
</html>
