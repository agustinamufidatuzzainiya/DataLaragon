<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<table border="1">
    <tr>
        <thead>
            <td>No.</td>
            <th>Nama Mata Kuliah</th>
        </thead>
    </tr>
    <tbody> <?php
$no=1;
include "koneksilatihan.php";
$a="SELECT * FROM matkul";
$b-$koneksi->query($a);
while ($c-$b->fetch_array()) { ?>
<tr>
    <th><?php echo $no ; ?></th>
    <th><?php echo $c['nm_matkul']; ?></th>
</tr>
<?php
}
?>
</tbody>
</table>
</body>
</html>