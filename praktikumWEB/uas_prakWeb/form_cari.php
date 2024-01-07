<!DOCTYPE html>
<html>
<head>
    <title>Form Cari</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_barang = $_POST['id_barang'];

            // Lakukan pencarian barang dan tampilkan hasil
            // ...

            // Contoh tampilan hasil pencarian
            echo '<h1>Hasil Pencarian</h1>';
            echo '<div class="result">';
            echo '<p>ID Barang: ' . $id_barang . '</p>';
            echo '<p>Nama Barang: Barang ABC</p>';
            echo '<p>Harga: Rp 100.000</p>';
            echo '</div>';
        } else {
            echo '<h1>Form Cari</h1>';
            echo '<div class="search-form">';
            echo '<form action="form_cari.php" method="POST">';
            echo '<input type="text" name="id_barang" placeholder="ID Barang">';
            echo '<input type="submit" value="Cari">';
            echo '</form>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
