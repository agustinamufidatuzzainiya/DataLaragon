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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <a href="menu_dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-home me-2"></i>Dashboard</a>
                <a href="menu_sepeda.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-database me-2"></i>Sepeda</a>
                <a style="color:azure;" href="menu_pemasok.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i class="fas fa-database me-2"></i>Pemasok</a>
                <a href="menu_transaksi.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-database me-2"></i>Transaksi</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" style="background-color: #9BA1A8;">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Pemasok</h2>
                </div>
            </nav>
            <div class="container-sm">
                <hr class="border-light border-2 opacity-75">
                <?php
                $id_pemasok = $_GET['id_pemasok'];          
                $r = $abc->tampil_data_pemasok($id_pemasok);
                ?>
                <form name="form" method="post" action="../client/proses_pemasok.php">
                    <div class="row">
                        <input type="hidden" name="aksi" value="ubah-pemasok" />
                        <input type="hidden" name="id_pemasok" value="<?= $r->id_pemasok ?>" />
                        <div class="mb-3 col-md-6">
                            <label for="nama_pemasok" class="form-label">Nama Pemasok</label>
                            <input type="text" class="form-control" id="nama_pemasok" name="nama_pemasok" value="<?= $r->nama_pemasok ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $r->jenis_kelamin ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $r->alamat ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="no_telp" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $r->no_telp ?>">
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" name="ubah-pemasok" value="Edit">
                    <a class="btn btn-danger" href="../menu/menu_pemasok.php" role="button">Cancel</a>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>