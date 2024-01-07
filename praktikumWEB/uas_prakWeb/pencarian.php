<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Barang</title>
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

        .search-form {
            margin-bottom: 20px;
        }

        .search-form input[type="text"] {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .search-form input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
        }

        .search-form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
        }

        .result p {
            text-align: center;
        }

        .result table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .result table th,
        .result table td {
            padding: 8px;
            border: 1px solid #ccc;
        }

        .notification {
            text-align: center;
            background-color: #f2dede;
            color: #a94442;
            padding: 10px;
            margin-top: 20px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pencarian Barang</h1>

        <form class="cari_edit.php" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="id_barang" placeholder="ID Barang">
            <input type="submit" value="Cari">
        </form>

        <?php
        // Proses pencarian barang
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_barang = $_POST['id_barang'];

            // Simulasi data barang
            $barang = [
                ['id' => '1', 'nama' => 'Sepatu', 'harga' => 'Rp 100.000'],
                ['id' => '2', 'nama' => 'jacket', 'harga' => 'Rp 150.000'],
                ['id' => '3', 'nama' => 'Sandal', 'harga' => 'Rp 50.000'],
                ['id' => '4', 'nama' => 'Jilbab', 'harga' => 'Rp 60.000'],
                ['id' => '5', 'nama' => 'baju', 'harga' => 'Rp 40.000'],
                ['id' => '6', 'nama' => 'Kaos Kaki', 'harga' => 'Rp 10.000'],
                ['id' => '7', 'nama' => 'kue', 'harga' => 'Rp 5.000'],
                ['id' => '8', 'nama' => 'roti', 'harga' => 'Rp 8.000'],
                ['id' => '9', 'nama' => 'tas', 'harga' => 'Rp 30.000'],
                ['id' => '10', 'nama' => 'mukane', 'harga' => 'Rp 120.000']
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
                echo '<div class="result">';
                echo '<table>';
                echo '<tr><th>Nama Barang</th><th>Harga</th></tr>';
                echo '<tr><td>' . $nama_barang . '</td><td>' . $harga_barang . '</td></tr>';
                echo '</table>';
                echo '</div>';
            } else {
                echo '<div class="notification">Tidak menemukan barang</div>';
            }
        }
        ?>
    </div>
</body>
</html>
