<form action="" method="post">
<h3>Click download to save a file</h3>    
<table border="1">
        <tr>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>File</th>
            <th>Nama File</th>
            <th>Tipe File</th>
            <th>Ukuran File</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <?php 
            include 'connection.php' ?>
            <?php 
            $asd = $koneksi->query("SELECT * FROM document"); ?>
            <?php 
            while ($d = $asd->fetch_array()) : ?>
            <?php if ($d['tipe_file']=="jpg" || 
            $d['tipe_file']=="jpeg" || $d['tipe_file']=="png" || 
            $d['tipe_file']=="pdf" || $d['tipe_file']=="doc" || 
            $d['tipe_file']=="docx") { ?>
            <td><?= $d['tgl']; ?></td>
            <td><?= $d['deskripsi']; ?></td>
            <td><?= $d['file']; ?></td>
            <td><?= $d['nama_file']; ?></td>
            <td><?= $d['tipe_file']; ?></td>
            <td><?= Number_format($d['ukuran_file']/(1024*1024), 1) ?> MB</td>
            <td><a href="download.php?url=<?php echo 
            $d['file']; ?>">Download</a></td>
            <?php } else { ?>
            <td><?= $d['tgl']; ?></td>
            <td><?= $d['deskripsi']; ?></td>            
            <td><img src="<?= $d['file']; ?>" width="100px"></td>
            <td><?= $d['nama_file']; ?></td>
            <td><?= $d['tipe_file']; ?></td>
            <td><?= $d['ukuran_file']; ?> Bytes</td>
            <td><a href="download.php?url=<?php echo 
            $d['file']; ?>">Download</a></td>
            <?php }?>
        </tr>
        <?php endwhile; ?>
        <a href="home.php">Back</a>
    </table>
</form>
 
