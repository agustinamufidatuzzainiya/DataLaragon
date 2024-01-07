<?php
include "../client/Client_sepeda.php";
include "../client/Client_pemasok.php";
//include "../client/Client_transaksi.php";
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

    <title>Dashboard Admin</title>
</head>

<?php
$nobanyakdatasepeda = 0;
$data_array = $abc->tampil_semua_data_sepeda();
foreach ($data_array as $r) {
?>


<?php
    $nobanyakdatasepeda++;
}
unset($data_array, $r);
?>

<?php
$nobanyakdatapemasok = 0;
$data_array = $abc->tampil_semua_data_pemasok();
foreach ($data_array as $r) {
?>


<?php
    $nobanyakdatapemasok++;
}
unset($data_array, $r);
?>

<?php
$nobanyakdatatransaksi = 0;
$data_array = $abc->tampil_semua_data_transaksi();
foreach ($data_array as $r) {
?>


<?php
    $nobanyakdatatransaksi++;
}
unset($data_array, $r);
?>



<body>

    <nav class="navbar navbar-info bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:azure;"> Admin Toko Sepeda</a>
        </div>
    </nav>

    <div class="d-flex bg-info text-white" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="bg-dark">
            <div class="list-group list-group-flush my-3">
                <a style="color:azure;" href="menu_dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-home me-2"></i>Dashboard</a>
                <a href="menu_sepeda.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-database me-2"></i>Data Sepeda</a>
                <a href="menu_pemasok.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i class="fas fa-database me-2"></i>Data Pemasok</a>
                <a href="menu_transaksi.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i class="fas fa-database me-2"></i>Data Transaksi</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" style="background-color: #9BA1A8;">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
            </nav>
            <div class="row" style="padding-left: 25px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="padding-bottom: 20px;">
                    <div class="row">
                        <div class="row row-cols-1 row-cols-md-4 g-2">
                            <div class="col">
                                <div class="card" style="width: 296px;">
                                    <img src="../image/dashboard/sepeda.jpg" class="card-img-top" alt="... " style=" height: 240px; background-color: darkslategray;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Total Sepeda</h5>
                                        <h2 class=" card-text" style="color: black;">
                                            <?= $nobanyakdatasepeda ?></h2>
                                        <a href="../menu/menu_sepeda.php" class="btn btn-primary">Go Visit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 280px;">
                                    <img src="../image/dashboard/pemasok.jpg" class="card-img-top" alt="... " style=" height: 240px; background-color: darkslategrey;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Total Pemasok</h5>
                                        <h2 class=" card-text" style="color: black;">
                                            <?= $nobanyakdatapemasok ?></h2>
                                        <a href="../menu/menu_pemasok.php" class="btn btn-primary">Go Visit</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 280px;">
                                    <img src="../image/dashboard/transaksi.jpg" class="card-img-top" alt="... " style=" height: 240px; background-color: darkslategrey;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: black;">Total Transaksi</h5>
                                        <h2 class=" card-text" style="color: black;">
                                            <?= $nobanyakdatatransaksi ?></h2>
                                        <a href="../menu/menu_transaksi.php" class="btn btn-primary">Go Visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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