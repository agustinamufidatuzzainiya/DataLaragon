<?php
include "../client/Client_pemasok.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css buatan sendiri -->
    <link rel="stylesheet" href="../css/style_dashboard.css">
    <title>Menu Data Sepeda</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href=""> Admin Toko Sepeda</a>
        </div>
    </nav>
    <div class="d-flex bg-info text-white" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="list-group list-group-flush my-3">
                <a href="menu_dashboard.php"
                    class="list-group-item list-group-item-action bg-transparent second-text "><i
                        class="fas fa-home me-2"></i>Dashboard</a>
                <a style="color: azure;" href="menu_sepeda.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i
                        class="fas fa-database me-2"></i>Data Sepeda</a>
                <a href="menu_pemasok.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-database me-2"></i>Data Pemasok</a>
                <a href="menu_transaksi.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-database me-2"></i>Data Transaksi</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper" style="background-color: #9BA1A8;">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Akun Admin</h2>
                </div>
            </nav>
            <div class="container-sm">
                <hr class="border-light border-2 opacity-75">
                <form action="../client/proses_sepeda.php" method="POST">
                    <div class="row">
                        <input type="hidden" name="aksi" value="tambah-sepeda" ?>
                        <div class="mb-3 col-md-6">
                            <label for="id_sepeda" class="form-label">ID Sepeda</label>
                            <input type="text" class="form-control" id="id_sepeda" name="id_sepeda">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="id_pemasok" class="form-label">ID & Nama Pemasok</label>
                            <select class="form-select" id="id_pemasok" name="id_pemasok">
                                <option value="">Pilih Pemasok</option>
                                <?php
                                $data_array = $abc->tampil_semua_data_pemasok();
                                foreach ($data_array as $r) {
                                    ?>
                                    <option value=" <?= $r->id_pemasok; ?>">
                                        <?= $r->id_pemasok; ?>.
                                        <?= $r->nama_pemasok; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nama" class="form-label">Nama Sepeda</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="gambar_sepeda" class="form-label">Gambar Sepeda</label>
                            <input type="text" class="form-control" id="gambar_sepeda" name="gambar_sepeda">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="ukuran" class="form-label">Ukuran</label>
                            <select name="ukuran" id="ukuran" required>
                                <option value="" disabled selected hidden>Pilih Ukuran Sepeda</option>
                                <option value="XXS -> frame 47-48 cm">XXS -> frame 47-48 cm</option>
                                <option value="XS -> frame 49-50 cm">XS -> frame 49-50 cm</option>
                                <option value="S -> frame 51-53 cm">S -> frame 51-53 cm</option>
                                <option value="M -> frame 54-55 cm">M -> frame 54-55 cm</option>
                                <option value="L -> frame 56-58 cm">L -> frame 56-58 cm</option>
                                <option value="XL -> frame 58-60 cm">XL -> frame 58-60 cm</option>
                                <option value="XXL -> frame 61-63 cm">XXL -> frame 61-63 cm</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="jenis" class="form-label">Jenis</label>
                            <select name="jenis" id="jenis" required>
                                <option value="" disabled selected hidden>Pilih Jenis Sepeda</option>
                                <option value="Sepeda Touring">Sepeda Touring</option>
                                <option value="Sepeda Listrik">Sepeda Listrik</option>
                                <option value="Sepeda Gunung">Sepeda Gunung</option>
                                <option value="Sepeda Balap">Sepeda Balap</option>
                                <option value="Sepeda Lipat">Sepeda Lipat</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="warna" class="form-label">Warna</label>
                            <input type="text" class="form-control" id="warna" name="warna">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="text" class="form-control" id="stok" name="stok">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                </form>
                <br><br>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-white p-4" style="background-color: #22333E;">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-envelope fa-stack-1x fa-inverse"> </i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="small text-center">✨ Created by Roudhotul Hannah & Agustina Mufidatuzainiya ✨</div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");
        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>