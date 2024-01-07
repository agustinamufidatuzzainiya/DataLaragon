<?php
include "Client.php";
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚲 Toko Sepeda 🚲</title>

    <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f0ff;
        }

        h1 {
            color: black;
            text-align: center;
            font-size: 2em;
            font-family: Verdana, sans-serif;
            cursor: pointer;
        }

        h1:hover {
            color: #7d4cdb;
        }

        fieldset {
            border: 2px solid #7d4cdb;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #fff;
        }

        form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            margin: auto;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #7d4cdb;
        }

        input,
        select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #7d4cdb;
            border-radius: 5px;
        }

        select {
            appearance: none;
            padding-right: 25px;
            background-color: #fff;
            background-image: url('https://image.flaticon.com/icons/svg/25/25231.svg');
            background-size: 15px;
            background-position: 95% center;
            background-repeat: no-repeat;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #333;
        }

        button {
            background-color: #7d4cdb;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            transition: background-color 0.1s;
        }

        button:hover {
            background-color: rgba(91, 46, 144, 0.8);
        }

        a {
            text-decoration: none;
            color: #7d4cdb;
            font-weight: bold;
            margin-right: 10px;
        }

        a:hover {
            color: #5b2e90;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #7d4cdb;
            padding: 10px;
            text-align: left;
            text-align: center;
        }

        th {
            background-color: #7d4cdb;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        legend {
            text-align: center;
            font-size: 24px;
            font-family: Cambria, "Times New Roman", serif;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
            gap: 20px;
        }

        .box {
            text-align: center;
            margin: 10px;
        }

        .box img {
            width: 300px;
            height: 300px;
            border: 2px solid #7d4cdb;
            border-radius: 50%;
            overflow: hidden;
            object-fit: cover;
        }

        .box p {
            margin-top: 10px;
            font-family: Cambria, "Times New Roman", serif;
            font-size: 16px;
        }

        p.center-text {
            text-align: center;
            margin-top: 20px;
            font-family: Cambria, "Times New Roman", serif;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <a href="?page=home">
        <h1>🚲 SELAMAT DATANG DI TOKO SEPEDA SEMOGA BERKAH 🚲</h1>
    </a>

    <label for="pageDropdown">Pilih Data:</label>
    <select id="pageDropdown" onchange="redirectToSelectedPage()">
        <option value="home">- Pilih Data -</option>
        <option value="daftar-data-sepeda">Data Sepeda</option>
        <option value="daftar-data-pemasok">Data Pemasok</option>
        <option value="daftar-data-transaksi">Data Transaksi</option>
    </select>

    <script>
        function redirectToSelectedPage() {
            var selectedPage = document.getElementById("pageDropdown").value;
            redirectToPage(selectedPage);
        }

        function redirectToPage(page) {
            window.location.href = ?page=${page};
        }
    </script>
    <br /><br />

    <fieldset>
        <?php

        // UNTUK TABEL DATA SEPEDA
        if ($_GET['page'] == 'tambah-sepeda') {
            ?>
            <legend>Tambah Data Sepeda</legend>
            <form name="form" method="POST" action="proses.php">
                <input type="hidden" name="aksi" value="tambah-sepeda" />

                <label for="id_sepeda">ID Sepeda</label>
                <input type="text" name="id_sepeda" id="id_sepeda" required placeholder="Masukkan ID Sepeda">

                <label for="id_pemasok">ID Pemasok</label>
                <input type="text" name="id_pemasok" id="id_pemasok" required placeholder="Masukkan ID Pemasok">

                <label for="nama">Nama Sepeda</label>
                <input type="text" name="nama" id="nama" required placeholder="Masukkan Nama Sepeda">

                <label for="gambar_sepeda">Gambar Sepeda URL</label>
                <input type="text" name="gambar_sepeda" id="gambar_sepeda" required
                    placeholder="Masukkan URL Gambar Sepeda">

                <label for="ukuran">Ukuran Sepeda</label>
                <select name="ukuran" id="ukuran" required>
                    <option value="" disabled selected hidden>Pilih Ukuran Sepeda</option>
                    <option value="xxs">XXS -> frame 47-48 cm</option>
                    <option value="xs">XS -> frame 49-50 cm</option>
                    <option value="s">S -> frame 51-53 cm</option>
                    <option value="m">M -> frame 54-55 cm</option>
                    <option value="l">L -> frame 56-58 cm</option>
                    <option value="xl">XL -> frame 58-60 cm</option>
                    <option value="xxl">XXL -> frame 61-63 cm</option>
                </select>

                <label for="jenis">Jenis Sepeda</label>
                <select name="jenis" id="jenis" required>
                    <option value="" disabled selected hidden>Pilih Jenis Sepeda</option>
                    <option value="touring">Sepeda Touring</option>
                    <option value="listrik">Sepeda Listrik</option>
                    <option value="gunung">Sepeda Gunung</option>
                    <option value="balap">Sepeda Balap</option>
                    <option value="lipat">Sepeda Lipat</option>
                </select>

                <label for="warna">Warna Sepeda</label>
                <input type="text" name="warna" id="warna" required placeholder="Masukkan Warna Sepeda">

                <label for="stok">Stok Sepeda</label>
                <input type="text" name="stok" id="stok" required placeholder="Masukkan Stok Sepeda">

                <label for="harga">Harga Sepeda</label>
                <input type="text" name="harga" id="harga" required placeholder="Masukkan Harga Sepeda">

                <button type="submit" name="simpan">Simpan</button>
            </form>
            <?php
        } elseif ($_GET['page'] == 'ubah-sepeda') {
            $r = $abc->tampil_data_sepeda($_GET['id_sepeda']);
            ?>
            <legend>Ubah Data sepeda</legend>
            <form name="form" method="post" action="proses.php">
                <input type="hidden" name="aksi" value="ubah-sepeda" />
                <input type="hidden" name="id_sepeda" value="<?= $r->id_sepeda ?>" />
                <label>ID Sepeda</label>
                <input type="text" value="<?= $r->id_sepeda ?>" disabled>
                <br />
                <label>ID Pemasok</label>
                <input type="text" name="id_pemasok" value="<?= $r->id_pemasok ?>">
                <br />
                <label>Nama Sepeda</label>
                <input type="text" name="nama" value="<?= $r->nama ?>">
                <br />
                <label>Gambar Sepeda URL</label>
                <input type="text" name="gambar_sepeda" value="<?= $r->gambar_sepeda ?>">
                <br />
                <label>Ukuran Sepeda</label>
                <select name="ukuran">
                    <option value="xxs" <?= ($r->ukuran == 'xxs') ? 'selected' : '' ?>>XXS -> frame 47-48 cm</option>
                    <option value="xs" <?= ($r->ukuran == 'xs') ? 'selected' : '' ?>>XS -> frame 49-50 cm</option>
                    <option value="s" <?= ($r->ukuran == 's') ? 'selected' : '' ?>>S -> frame 51-53 cm</option>
                    <option value="m" <?= ($r->ukuran == 'm') ? 'selected' : '' ?>>M -> frame 54-55 cm</option>
                    <option value="l" <?= ($r->ukuran == 'l') ? 'selected' : '' ?>>L -> frame 56-58 cm</option>
                    <option value="xl" <?= ($r->ukuran == 'xl') ? 'selected' : '' ?>>XL -> frame 58-60 cm</option>
                    <option value="xxl" <?= ($r->ukuran == 'xxl') ? 'selected' : '' ?>>XXL -> frame 61-63 cm</option>
                </select> <br />
                <label>Jenis Sepeda</label>
                <select name="jenis">
                    <option value="touring" <?= ($r->jenis == 'touring') ? 'selected' : '' ?>>Sepeda Touring</option>
                    <option value="listrik" <?= ($r->jenis == 'listrik') ? 'selected' : '' ?>>Sepeda Listrik</option>
                    <option value="gunung" <?= ($r->jenis == 'gunung') ? 'selected' : '' ?>>Sepeda Gunung</option>
                    <option value="balap" <?= ($r->jenis == 'balap') ? 'selected' : '' ?>>Sepeda Balap</option>
                    <option value="lipat" <?= ($r->jenis == 'lipat') ? 'selected' : '' ?>>Sepeda Lipat</option>
                </select>
                <br />
                <label>Warna Sepeda</label>
                <input type="text" name="warna" value="<?= $r->warna ?>">
                <br />
                <label>Stok Sepeda</label>
                <input type="text" name="stok" value="<?= $r->stok ?>">
                <br />
                <label>Harga Sepeda</label>
                <input type="text" name="harga" value="<?= $r->harga ?>">
                <br />
                <button type="submit" name="ubah">Ubah</button>
            </form>
            <?php
            unset($r);
        } elseif ($_GET['page'] == 'daftar-data-sepeda') {
            ?>
            <button onclick="redirectToPage('tambah-sepeda')">Tambah Sepeda</button>
            <legend>🚲 Data Sepeda 🚲</legend>
            <table border="1">
                <tr>
                    <th width="5%">No</th>
                    <th width="10%">ID Sepeda</th>
                    <th width="10%">ID Pemasok</th>
                    <th width="30%">Nama Sepeda</th>
                    <th width="15%">Gambar Sepeda</th>
                    <th width="10%">Ukuran</th>
                    <th width="10%">Jenis</th>
                    <th width="10%">Warna</th>
                    <th width="5%">Stok</th>
                    <th width="10%">Harga</th>
                    <th width="5%" colspan="2">Aksi</th>
                </tr>
                <?php
                $no = 1;
                $data_array = $abc->tampil_semua_data_sepeda();
                foreach ($data_array as $r) {
                    ?>
                    <tr>
                        <td>
                            <?= $no ?>
                        </td>
                        <td>
                            <?= $r->id_sepeda ?>
                        </td>
                        <td>
                            <?= $r->id_pemasok ?>
                        </td>
                        <td>
                            <?= $r->nama ?>
                        </td>
                        <td>
                            <img src="<?= $r->gambar_sepeda ?>" alt="<?= $r->nama ?>" style="max-width: 200px; max-height: 200px;">
                        </td>
                        <td>
                            <?= $r->ukuran ?>
                        </td>
                        <td>
                            <?= $r->jenis ?>
                        </td>
                        <td>
                            <?= $r->warna ?>
                        </td>
                        <td>
                            <?= $r->stok ?>
                        </td>
                        <td>
                            <?= $r->harga ?>
                        </td>
                        <td><a href="?page=ubah-sepeda&id_sepeda=<?= $r->id_sepeda ?>">Ubah</a></td>
                        <td><a href="proses.php?aksi=hapus-sepeda&id_sepeda=<?= $r->id_sepeda ?>"
                                onclick="return confirm('Apakah Anda ingin menghapus data ini?')">Hapus</a></td>
                    </tr>
                    <?php
                    $no++;
                }
                unset($data_array, $r, $no);
                ?>
            </table>
            <?php
        }

        // UNTUK TABEL DATA PEMASOK
        elseif ($_GET['page'] == 'tambah-pemasok') {
            ?>
            <legend>Tambah Data Pemasok</legend>
            <form name="form" method="POST" action="proses.php">
                <input type="hidden" name="aksi" value="tambah-pemasok" />

                <label for="id_pemasok">ID pemasok</label>
                <input type="text" name="id_pemasok" id="id_pemasok" required placeholder="Masukkan ID Pemasok">

                <label for="nama_pemasok">Nama pemasok</label>
                <input type="text" name="nama_pemasok" id="nama_pemasok" required placeholder="Masukkan Nama Pemasok">

                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" required placeholder="Masukkan Jenis Kelamin">

                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" required placeholder="Masukkan Alamat Pemasok">

                <label for="no_telp">No. Telepon</label>
                <input type="text" name="no_telp" id="no_telp" required placeholder="Masukkan No. Telp Pemasok">

                <button type="submit" name="simpan">Simpan</button>
            </form>
            <?php
        } elseif ($_GET['page'] == 'ubah-pemasok') {
            $r = $abc->tampil_data_pemasok($_GET['id_pemasok']);
            ?>
            <legend>Ubah Data pemasok</legend>
            <form name="form" method="post" action="proses.php">
                <input type="hidden" name="aksi" value="ubah-pemasok" />
                <input type="hidden" name="id_pemasok" value="<?= $r->id_pemasok ?>" />
                <label>ID pemasok</label>
                <input type="text" value="<?= $r->id_pemasok ?>" disabled>
                <br />
                <label>Nama Pemasok</label>
                <input type="text" name="nama_pemasok" value="<?= $r->nama_pemasok ?>">
                <br />
                <label>Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" value="<?= $r->jenis_kelamin ?>">
                <br />
                <label>Alamat</label>
                <input type="text" name="alamat" value="<?= $r->alamat ?>">
                <br />
                <label>No. Telepon</label>
                <input type="text" name="no_telp" value="<?= $r->no_telp ?>">
                <br />
                <button type="submit" name="ubah">Ubah</button>
            </form>
            <?php
            unset($r);
        } elseif ($_GET['page'] == 'daftar-data-pemasok') {
            ?>
            <button onclick="redirectToPage('tambah-pemasok')">Tambah Pemasok</button>
            <legend>🧑🏻‍🦰 Data Pemasok 👩🏻‍🦰</legend>
            <table border="1">
                <tr>
                    <th width="5%">No</th>
                    <th width="10%">ID Pemasok</th>
                    <th width="40%">Nama Pemasok</th>
                    <th width="15%">Jenis Kelamin</th>
                    <th width="15%">Alamat</th>
                    <th width="15%">No. Telepon</th>
                    <th width="5%" colspan="2">Aksi</th>
                </tr>
                <?php
                $no = 1;
                $data_array = $abc->tampil_semua_data_pemasok();
                foreach ($data_array as $r) {
                    ?>
                    <tr>
                        <td>
                            <?= $no ?>
                        </td>
                        <td>
                            <?= $r->id_pemasok ?>
                        </td>
                        <td>
                            <?= $r->nama_pemasok ?>
                        </td>
                        <td>
                            <?= $r->jenis_kelamin ?>
                        </td>
                        <td>
                            <?= $r->alamat ?>
                        </td>
                        <td>
                            <?= $r->no_telp ?>
                        </td>
                        <td><a href="?page=ubah-pemasok&id_pemasok=<?= $r->id_pemasok ?>">Ubah</a></td>
                        <td><a href="proses.php?aksi=hapus-pemasok&id_pemasok=<?= $r->id_pemasok ?>"
                                onclick="return confirm('Apakah Anda ingin menghapus data ini?')">Hapus</a></td>
                    </tr>
                    <?php
                    $no++;
                }
                unset($data_array, $r, $no);
                ?>
            </table>
            <?php
        }

        // UNTUK TABEL DATA TRANSAKSI
        elseif ($_GET['page'] == 'tambah-transaksi') {
            ?>
            <legend>Tambah Data Transaksi</legend>
            <form name="form" method="POST" action="proses.php">
                <input type="hidden" name="aksi" value="tambah-transaksi" />

                <label for="id_transaksi">ID Transaksi</label>
                <input type="text" name="id_transaksi" id="id_transaksi" required placeholder="Masukkan ID Transaksi">

                <label for="id_sepeda">ID Sepeda</label>
                <input type="text" name="id_sepeda" id="id_sepeda" required placeholder="Masukkan ID Sepeda">

                <label for="id_pemasok">ID Pemasok</label>
                <input type="text" name="id_pemasok" id="id_pemasok" required placeholder="Masukkan ID Pemasok">

                <!-- <label for="tanggal_transaksi">Tanggal transaksi</label>
                <input type="datetime-local" name="tanggal_transaksi" id="tanggal_transaksi" required> -->

                <label for="jumlah_barang">Jumlah Barang</label>
                <input type="text" name="jumlah_barang" id="jumlah_barang" required placeholder="Masukkan Jumlah Barang">

                <label for="total_harga">Total Harga</label>
                <input type="text" name="total_harga" id="total_harga" required placeholder="Masukkan Total Harga">

                <button type="submit" name="simpan">Simpan</button>
            </form>
            <?php
        } elseif ($_GET['page'] == 'ubah-transaksi') {
            $r = $abc->tampil_data_transaksi($_GET['id_transaksi']);
            ?>
            <legend>Ubah Data transaksi</legend>
            <form name="form" method="post" action="proses.php">
                <input type="hidden" name="aksi" value="ubah-transaksi" />
                <input type="hidden" name="id_transaksi" value="<?= $r->id_transaksi ?>" />
                <label>ID transaksi</label>
                <input type="text" value="<?= $r->id_transaksi ?>" disabled>
                <br />
                <label>ID sepeda</label>
                <input type="text" name="id_sepeda" value="<?= $r->id_sepeda ?>">
                <br />
                <label>ID pemasok</label>
                <input type="text" name="id_pemasok" value="<?= $r->id_pemasok ?>">
                <br />
                <label>ID Menu</label>
                <input type="text" name="id_menu" value="<?= $r->id_menu ?>">
                <br />
                <label>Jumlah transaksi</label>
                <input type="text" name="jumlah" value="<?= $r->jumlah ?>">
                <br />
                <!-- <label>Tanggal transaksi</label>
                <input type="datetime-local" name="tanggal_transaksi" value="<?= date('Y-m-d\TH:i', strtotime($r->tanggal_transaksi)) ?>" required>
                <br /> -->
                <button type="submit" name="ubah">Ubah</button>
            </form>
            <?php
            unset($r);
        } elseif ($_GET['page'] == 'daftar-data-transaksi') {
            ?>
            <button onclick="redirectToPage('tambah-transaksi')">Tambah Transaksi</button>
            <legend>📝 Data Transaksi 📝</legend>
            <table border="1">
                <tr>
                    <th width="5%">No</th>
                    <th width="10%">ID Transaksi</th>
                    <th width="10%">ID Sepeda</th>
                    <th width="10%">ID Pemasok</th>
                    <th width="20%">Tanggal Transaksi</th>
                    <th width="15%">Jumlah Barang</th>
                    <th width="15%">Total Harga</th>
                    <th width="5%" colspan="2">Aksi</th>
                </tr>
                <?php
                $no = 1;
                $data_array = $abc->tampil_semua_data_transaksi();
                foreach ($data_array as $r) {
                    ?>
                    <tr>
                        <td>
                            <?= $no ?>
                        </td>
                        <td>
                            <?= $r->id_transaksi ?>
                        </td>
                        <td>
                            <?= $r->id_sepeda ?>
                        </td>
                        <td>
                            <?= $r->id_pemasok ?>
                        </td>
                        <td>
                            <?= $r->tanggal_transaksi ?>
                        </td>
                        <td>
                            <?= $r->jumlah_barang ?>
                        </td>
                        <td>
                            <?= $r->total_harga ?>
                        </td>
                        <td><a href="?page=ubah-transaksi&id_transaksi=<?= $r->id_transaksi ?>">Ubah</a></td>
                        <td><a href="proses.php?aksi=hapus-transaksi&id_transaksi=<?= $r->id_transaksi ?>"
                                onclick="return confirm('Apakah Anda ingin menghapus data ini?')">Hapus</a></td>
                    </tr>
                    <?php
                    $no++;
                }
                unset($data_array, $r, $no);
                ?>
            </table>
            <?php
        } else {
            ?>
            <legend>Toko Sepeda Semoga Berkah</legend>
            <div class="container">

                <!-- Kotak pertama -->
                <div class="box">
                    <div>
                        <img src="foto nopa.jpg" alt="FOTO NIYA">
                    </div>
                    <p>Nova Rahma Yunida Putri<br>210605110014</p>
                </div>

                <!-- Kotak kedua -->
                <div class="box">
                    <div>
                        <img src="foto anden.jpg" alt="FOTO HANNAH">
                    </div>
                    <p>Aldiana Damayanti<br>210605110027</p>
                </div>
            </div>

            <!-- <p class="center-text">
                Sistem Manajemen Restoran Denva ini Menggunakan RESTFUL dengan Format Data JSON (JavaScript Object Notation).
            </p> -->
        </fieldset>
        <?php
        }
        ?>
</body>

</html>