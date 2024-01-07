<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .edit-form {
            margin-top: 20px;
        }

        .edit-form label {
            display: block;
            margin-bottom: 5px;
        }

        .edit-form input[type="text"] {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .edit-form input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
        }

        .edit-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Barang</h1>

        <?php
        // Cek apakah ada parameter id_barang dari halaman sebelumnya
        if (isset($_GET['id_barang'])) {
            $id_barang = $_GET['id_barang'];

            // Simulasi data barang
            $barang = [
                ['id' => '1', 'nama' => 'Sepatu', 'harga' => 'Rp 100.000'],
                ['id' => '2', 'nama' => 'jacket', 'harga' => 'Rp 150.000'],
                ['id' => '3', 'nama' => 'Sandal', 'harga' => 'Rp 50.000'],
                ['id' => '4', 'nama' => 'Jilbab', 'harga' => 'Rp 60.000'],
                ['id' => '5', 'nama' => 'baju', 'harga' => 'Rp 40.000'],
                ['id' => '6', 'nama' => 'Kaos Kaki', 'harga' => 'Rp 10.000']
            ];

            $found = false;
            $nama_barang = '';
            $harga_barang = '';

            foreach ($barang as $item) {
                if ($item['id'] == $id_barang) {
                    $found = true;
                    $nama_barang = $item['nama'];
                    $harga_barang = $item['harga'];
                    break;
                }
            }

            if ($found) {
                echo '<form class="edit-form" method="POST" action="edit_process.php">';
                echo '<input type="hidden" name="id_barang" value="' . $id_barang . '">';
                echo '<div class="form-group">';
                echo '<label for="nama_barang">Nama Barang:</label>';
                echo '<input type="text" name="nama_barang" id="nama_barang" value="' . $nama_barang . '">';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<label for="harga_barang">Harga:</label>';
                echo '<input type="text" name="harga_barang" id="harga_barang" value="' . $harga_barang . '">';
                echo '</div>';
                echo '<div class="form-group">';
                echo '<input type="submit" value="Simpan">';
                echo '</div>';
                echo '</form>';
            } else {
                echo '<p>Barang tidak ditemukan</p>';
            }
        } else {
            echo '<p>Tidak ada ID Barang yang ditemukan</p>';
        }
        ?>

    </div>
</body>
</html>
