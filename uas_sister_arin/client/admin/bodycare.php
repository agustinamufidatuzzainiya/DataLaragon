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
            <a class="nav-link" href="#">
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
          <h1 class="mt-4">BODYCARE PRODUCT</h1>
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
          <button type="button" class="btn btn-primary btn-lg mb-4" data-bs-toggle="modal" data-bs-target="#bodytambah">
            Tambah
          </button>

          <br>
          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              WELCOME
            </div>
            <?php
            include 'vendor/autoload.php';

            use GuzzleHttp\Client;

            $client = new Client([
              'base_uri' => 'http://192.168.63.141:8000',
              'timeout' => 5
            ]);

            // Ambil data dari /api/beautycare
            $responseBodyCare = $client->request('GET', '/api/bodycare');
            $bodyBodyCare = $responseBodyCare->getBody();
            $dataBodyCare = json_decode($bodyBodyCare);
            $nextIdBCare = 1;

            if (!empty($dataBodyCare)) {
              $maxIdBodyCare = max(array_column($dataBodyCare, 'id'));
              $nextIdBodyCare = $maxIdBodyCare + 1;
            }


            ?>

            <div class="card-body">

              <table id="datatablesSimple" class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Merk </th>
                    <th>URL Gambar</th>
                    <th>Jenis </th>
                    <th>Detail</th>
                    <th>Harga</th>
                    <th class="" style="width: 300px;">Action</th>
                  </tr>
                </thead>

                <?php
                $no = 1;
                foreach ((array)$dataBodyCare as $data) { ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data->id ?></td>
                    <td><?php echo $data->merk ?></td>
                    <td><?php echo $data->gambar ?></td>
                    <td><?php echo $data->jenis ?></td>
                    <td class="detail-cell"><?php echo $data->detail ?></td>
                    <td><?php echo $data->harga ?></td>
                    <script>
                      function showSuccessMessage() {
                        alert("APAKAH ANDA YAKIN MENGHAPUS DATA INI?");
                      }
                    </script>
                    <td class="text-center" style="min-width: 120px;">
                      <a href="form_edit_body.php?id=<?php echo $data->id; ?>"> <button type="button" class="btn btn-sm btn-success">Edit</button></a>
                      <a href="delete_body.php?id=<?php echo $data->id; ?>"> <button type="button" class="btn btn-sm btn-danger" onclick="showSuccessMessage()">Hapus</button></a>

                    </td>

                  </tr>
                <?php } ?>
                <!-- Tambah Anggota Modal -->

                <div class="modal fade" id="bodytambah" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk Bodycare</h5>
                      </div>
                      <form action="add_body.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                          <div class="form-group">
                            <label class="control-label" for="id_field">Id Produk</label>
                            <input type="text" class="form-control" value="<?php echo $nextIdBodyCare; ?>" id="id_field" name="id" readonly>
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="merek_field">Merk</label>
                            <input type="text" class="form-control" placeholder="Masukkan Merk Produk" id="merk_field" name="merk" required>
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="gambar_field">Link Gambar</label>
                            <input type="text" class="form-control" placeholder="Masukkan URL gambar Produk" id="gambar_field" name="gambar" required>
                          </div>

                          <div class="form-group">
                            <label class="control-label" for="jenis_field">Jenis</label>
                            <input type="text" class="form-control" placeholder="Masukkan Jenis Produk" id="jenis_field" name="jenis" required>
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="harga_field">Harga</label>
                            <input type="text" class="form-control" placeholder="Masukkan Harga Produk" id="harga_field" name="harga" required>
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="detail_field">Detail</label>
                            <textarea type="text" class="form-control" placeholder="Masukkan Detail Produk" id="detail_field" name="detail" cols="25" rows="8" required></textarea>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-danger" type="reset">Reset</button>
                          <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>
            <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
            <script>
              window.TrackJS &&
                TrackJS.install({
                  token: "ee6fab19c5a04ac1a32a645abde4613a",
                  application: "black-dashboard-free"
                });
            </script>
</body>

</html>