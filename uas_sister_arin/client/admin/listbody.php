<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>List Produk</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

    <?php
    include __DIR__ . '/vendor/autoload.php';

    use GuzzleHttp\Client;

    $client = new Client([
        'base_uri' => 'http://192.168.63.141:8000',
        'timeout'  => 5
    ]);

    // Ambil data dari /api/bodycare
    $responseBodyCare = $client->request('GET', '/api/bodycare');
    $dataBodyCare = json_decode($responseBodyCare->getBody(), true);
    ?>
</head>

<body>

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="filters">
                            </div>
                        </div>
                    </div>

                    <div class="title">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="filters">
                                            <h2 style="color: white;">BodyCare Page</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row grid">
                        <?php foreach ($dataBodyCare as $data) : ?>
                            <div class="col-lg-4 templatemo-item-col all soon">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <!-- Place your image here -->
                                    </div>
                                    <div class="down-content">
                                        <br>
                                        <a style="display: flex; flex-direction: column;">
                                            <img src="<?php echo $data['gambar']; ?>" alt="Deskripsi Gambar" style="width: 100%; height: auto;">
                                            <h9 style="margin-top: 0;"><?php echo $data['harga']; ?></h9>
                                        </a>

                                        <div class="date">
                                            <small>
                                                <script type='text/javascript'>
                                                    // ... (Leave this as it is)
                                                </script>
                                            </small>
                                        </div>
                                        <br>
                                        <a style="display: flex; flex-direction: column;">
                                            <h4 style="margin-bottom: 5px;"><?php echo $data['merk']; ?></h4>
                                            <h9 style="margin-top: 0;"><?php echo $data['jenis']; ?></h9>
                                            <h9 style="margin-top: 0; text-align: justify;"><?php echo $data['detail']; ?></h9>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <br>

                    <div class="col-lg-12">
                        <div class="main-button-red">
                            <a href="menu.html">Kembali ke Menu</a>
                        </div>
                    </div>
                    <div class="footer">
                        <p>Copyright © 2023<br>Website by <a rel="mine" href="https://www.linkedin.com/in/daurin-nabilatul-munna-5a5a90224/" target="_blank">210605110025</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox
