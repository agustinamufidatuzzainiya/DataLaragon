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
    'base_uri' => 'http://192.168.63.141:8001',
    'timeout' => 5
  ]);

  // Ambil data dari /api/beautycare
  $responseBeautyCare = $client->request('GET', '/api/beautycare');
  $bodyBeautyCare = $responseBeautyCare->getBody();
  $dataBeautyCare = json_decode($bodyBeautyCare);
  $nextIdBeautyCare = 1;

  if (!empty($dataBeautyCare)) {
    $maxIdBeautyCare = max(array_column($dataBeautyCare, 'id'));
    $nextIdBeautyCare = $maxIdBeautyCare + 1;
  }
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
                      <h2 style="color: white;">BeautyCare Page</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row grid">
            <?php foreach ((array)$dataBeautyCare as $data) : ?>
              <div class="col-lg-4 templatemo-item-col all soon">
                <div class="meeting-item">
                  <div class="thumb">
                    <form>
                  </div>
                  <div class="down-content">
                    <br>
                    <a style="display: flex; flex-direction: column;">
                      <img src="<?php echo $data->gambar ?>" alt="Deskripsi Gambar" style="width: 100%; height: auto;">
                      <h9 style="margin-top: 0;"><?php echo $data->harga ?></h9>
                    </a>

                    <div class="date">
                      <small>
                        <script type='text/javascript'>
                          var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                          var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
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
                    </div>
                    <br>
                    <a style="display: flex; flex-direction: column;">
                      <h4 style="margin-bottom: 5px;"><?php echo $data->merk ?></h4>
                      <h9 style="margin-top: 0;"><?php echo $data->jenis ?></h9>
                      <h9 style="margin-top: 0; text-align: justify;"><?php echo $data->detail ?></h9>
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>


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
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/isotope.js"></script>
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
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }
    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
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

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script>
</body>

</html>