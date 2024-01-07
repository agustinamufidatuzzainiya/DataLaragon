<?php
include "../client/Client_sepeda.php";
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

    <title>Menu Data Pemasok</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> Admin Toko Sepeda</a>
        </div>
    </nav>

    <div class="d-flex bg-info text-white" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="list-group list-group-flush my-3">
                <a href="menu_dashboard.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                    <h2 class="fs-2 m-0">Sepeda</h2>
                </div>
            </nav>
            <div class="container-sm">
                <hr class="border-light border-2 opacity-75">
                <?php
                $id_sepeda = $_GET['id_sepeda'];
                //  $data_array = $abc->tampil_data($id_sepeda);            
                $r = $abc->tampil_data_sepeda($id_sepeda);
                ?>
                <form name="form" method="post" action="../client/proses_sepeda.php">
                    <div class="row">
                        <input type="hidden" name="aksi" value="ubah-sepeda" />
                        <input type="hidden" name="id_sepeda" value="<?= $r->id_sepeda ?>" />
                        <div class="mb-3 col-md-6">
                            <label for="nama" class="form-label">Nama Sepeda</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="<?= $r->nama ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="id_pemasok" class="form-label">ID Pemasok</label>
                            <input type="text" class="form-control" id="id_pemasok" name="id_pemasok"
                                value="<?= $r->id_pemasok ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="gambar_sepeda" class="form-label">Gambar sepeda</label>
                            <input type="text" class="form-control" id="gambar_sepeda" name="gambar_sepeda"
                                value="<?= $r->gambar_sepeda ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="text" class="form-control" id="stok" name="stok" value="<?= $r->stok ?>">
                        </div>                        
                        <div class="mb-3 col-md-6">
                            <label for="jenis" class="form-label">Jenis</label>
                            <select name="jenis">
                                <option value="Sepeda Touring" <?= ($r->jenis == 'Sepeda Touring') ? 'selected' : '' ?>>Sepeda Touring</option>
                                <option value="Sepeda Listrik" <?= ($r->jenis == 'Sepeda Listrik') ? 'selected' : '' ?>>Sepeda Listrik</option>
                                <option value="Sepeda Gunung" <?= ($r->jenis == 'Sepeda Gunung') ? 'selected' : '' ?>>Sepeda Gunung</option>
                                <option value="Sepeda Balap" <?= ($r->jenis == 'Sepeda Balap') ? 'selected' : '' ?>>Sepeda Balap</option>
                                <option value="Sepeda Lipat" <?= ($r->jenis == 'Sepeda Lipat') ? 'selected' : '' ?>>Sepeda Lipat</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="ukuran" class="form-label">Ukuran</label>
                            <select name="ukuran">
                                <option value="XXS -> frame 47-48 cm" <?= ($r->ukuran == 'xxs') ? 'selected' : '' ?>>XXS -> frame 47-48 cm</option>
                                <option value="XS -> frame 49-50 cms" <?= ($r->ukuran == 'xs') ? 'selected' : '' ?>>XS -> frame 49-50 cm</option>
                                <option value="S -> frame 51-53 cm" <?= ($r->ukuran == 's') ? 'selected' : '' ?>>S -> frame 51-53 cm</option>
                                <option value="M -> frame 54-55 cm" <?= ($r->ukuran == 'm') ? 'selected' : '' ?>>M -> frame 54-55 cm</option>
                                <option value="L -> frame 56-58 cm" <?= ($r->ukuran == 'l') ? 'selected' : '' ?>>L -> frame 56-58 cm</option>
                                <option value="XL -> frame 58-60 cm" <?= ($r->ukuran == 'xl') ? 'selected' : '' ?>>XL -> frame 58-60 cm</option>
                                <option value="XXL -> frame 61-63 cm" <?= ($r->ukuran == 'xxl') ? 'selected' : '' ?>>XXL -> frame 61-63 cm
                                </option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="warna" class="form-label">Warna</label>
                            <input type="text" class="form-control" id="warna" name="warna"
                                value="<?= $r->warna ?>">
                        </div>                        
                        <div class="mb-3 col-md-6">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga"
                                value="<?= $r->harga ?>">
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" name="ubah" value="Edit">
                    <a class="btn btn-danger" href="../menu/menu_sepeda.php" role="button">Cancel</a>
                </form>
                <?php unset($r);
                ?>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-white p-4">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
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