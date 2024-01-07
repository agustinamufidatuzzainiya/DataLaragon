<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Detail Artikel</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="list.php" class="logo">
                          BACK TO LIST
                      </a>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <?php 
    include '../HalamanAdmin/koneksi.php';
    if (isset($_POST['sub'])) {
    $nama = $_POST['namakt'];
    $sql = $koneksi->query("SELECT * FROM artikel JOIN kategori ON artikel.id_kategori=kategori.id_kategori WHERE kategori.nama_kategori ='$nama' ");
      echo $nama;
  ?>
  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <?php while ($row = $sql->fetch_array()) { ?>
              <div class="meeting-single-item">
                <div class="down-content">
                  <a><img src="../HalamanAdmin/img/foto/<?= $row['foto']; ?>" alt="" style= "down-content width:1275px; height:600px;"></a>
                  <h2><?= $row['judul'] ?></h2>
                  <br>
                  <p style="text-align: left;"><b>Artikel Tentang :</b> <?= $row['nama_kategori'] ?></p>
                  <p style="text-align: left;"><b>Ditulis Pada Tanggal :</b> <?= $row['tanggal'] ?></p>
                  <p style="text-align: left;"><b>Oleh :</b> <?= $row['nama_penulis'] ?></p>
                  <br>
                  <br>
                  <?= '<div style="text-align: justify;">' . $row['isi'] . '</div>'; ?>
                  </p>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <?php } } ?>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="menu.html">Back To Menu</a>
              </div>
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
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>


  </body>

</html>
