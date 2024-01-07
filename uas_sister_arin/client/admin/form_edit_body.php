<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>GIRL'S PAGE 🧏🏻‍♀️💛</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand ps-3" href="#">Harmony Beauty 🧏🏻‍♀️💛</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
        </form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Main Menu</div>
                        <a class="nav-link" href="beautycare.php">
                            <div class="fas fa-grin-hearts"><i class="fas fa-book"></i></div>
                            BEAUTYCARE
                        </a>
                        <a class="nav-link" href="bodycare.php">
                            <div class="fas fa-kiss-wink-heart"><i class="fas fa-book"></i></div>
                            BODYCARE
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">BEAUTYCARE PRODUCT</h1>
                    <small>
                        <script type='text/javascript'>
                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
                                'September', 'Oktober', 'November', 'Desember'
                            ];
                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumaat', 'Sabtu'];
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth();
                            var thisDay = date.getDay(),
                                thisDay = myDays[thisDay];
                            var yy = date.getYear();
                            var year = (yy < 1000) ? yy + 1900 : yy;
                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                        </script>
                    </small>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Kecantikan yang Mencerahkan, Kesehatan yang Mempesona,
                            Temukan di
                            Sini!🦋🧡</li>
                    </ol>

                    <body>

                        <?php

                        require __DIR__ . '/vendor/autoload.php';

                        use GuzzleHttp\Client;

                        $id = $_GET['id'];

                        $client = new Client([
                            'base_uri' => 'http://192.168.63.141:8000',
                            'timeout' => 5
                        ]);

                        $response =  $client->request('GET', '/api/Idbodycare', [
                            'json' => [
                                'id' => $id,
                            ]
                        ]);
                        $body = $response->getBody();
                        $data = json_decode($body);

                        ?>

                        <h5>Edit Produk Body care</h5>

                        <form action="edit_body.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                            <div class="body">
                                <div class="form-group">
                                    <label class="control-label" for="id_field">Id Produk</label>
                                    <input type="text" class="form-control" id="id_field" name="id" value="<?php echo $data->id; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="merk_field">Merk</label>
                                    <input type="text" class="form-control" id="merk_field" name="merk" value="<?php echo $data->merk; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="gambar_field">Link Gambar</label>
                                    <input type="text" class="form-control" id="gambar_field" name="gambar" value="<?php echo $data->gambar; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="jenis_field">Jenis</label>
                                    <input type="text" class="form-control" id="jenis_field" name="jenis" value="<?php echo $data->jenis; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="harga_field">Harga</label>
                                    <input type="text" class="form-control" id="harga_field" name="harga" value="<?php echo $data->harga; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="detail_field">Detail</label>


                                    <textarea type="text" class="form-control" id="detail_field" name="detail" cols="25" rows="8" required><?php echo $data->detail; ?></textarea>
                                </div>
                            </div>
                            <br>

                            <head>
                                <!-- your existing head content -->

                                <script>
                                    function showSuccessMessage() {
                                        alert("APAKAH ANDA YAKIN INGIN MERUBAH DATA?");
                                    }
                                </script>
                            </head>

                            <div class="modal-footer d-flex">
                                <a class="btn btn-danger btn-lg" href="bodycare.php">Cancel</a>
                                <button class="btn btn-primary btn-lg ms-4" type="submit" onclick="showSuccessMessage()">Edit</button>
                            </div>


                        </form>

                        <!-- Include any necessary scripts or closing tags here -->

                    </body>

</html>