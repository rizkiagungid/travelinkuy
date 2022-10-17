 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START Custom CSS -->
    <link href="http://localhost/travelinkuy/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- START Custom CSS -->
    <link rel="stylesheet" href="http://localhost/travelinkuy/style.css">
    <link rel="stylesheet" href="http://localhost/travelinkuy/styledestinasi.css">
    <!-- END Custom CSS -->

    <!-- START Custom JAVASCRIPT -->
    <script type="text/javascript" src="http://localhost/travelinkuy/script.js"></script>
    <!-- END Custom JAVASCRIPT -->

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Logo Icon Web-->
    <link rel="icon" type="image/x-icon" href="MainLogo.png" />

    <!-- Animasi-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    
    <!-- Fontawesome-->
    <script src="https://kit.fontawesome.com/ffbe25f2fc.js" crossorigin="anonymous"></script>

    <!-- Homepage -->
    <title>Rumah Sumba - TravelinKuy</title>

    <!-- DATA POSTINGAN -->
    <?php

    $title = "Travelin'sKuy";
    $pembuatpost = "Travelin'sKuy Team";
    $judul = "Rumah Sumba";

    $deskripsi_singkat = "Kampung adat yang Terletak di pesisir pantai ini menyimpan sejarah manusia di zaman megalitikum. Desa Adat Ratenggaro memiliki 304 kubur batu megalitikum yang sudah berumur ribuan tahun. Selain mengagumi peninggalan zaman batu besar, destinasi wisata budaya di Indonesia satu ini juga memiliki fasilitas menarik lain seperti berkuda dan menyewa baju adat. Kamu pun dapat memasuki rumah adat Uma Kelada dengan langit-langit yang menjulang hingga 15 meter.";
    $deskripsi = " Salah satu pulau di Indonesia meraih nominasi sebagai The Best Beautiful Island in The World (pulau terbaik di dunia) versi majalah Focus Jerman (2018). Pulau tersebut adalah Pulau Sumba yang menyimpan tidak hanya keanekaragaman dan keindahan alam, namun juga budayanya. Maka tidak mengherankan bila 19,03% desa wisata yang ada di Indonesia terpusat di Provinsi NTT termasuk Pulau Sumba (Statistik Potensi Desa, 2018). Salah satu representasi terbaik keindahan Pulau Sumba dapat kita jumpai pada Desa Adat Ratenggaro.
  <br>
    Budaya unik lainnya yang dapat kita lihat dari pola permukiman adalah adanya empat rumah khusus yang disakralkan oleh penduduk, yaitu Uma Katode Kataku, Uma Kalam, Uma Katode Kuri, dan Uma Katode Amahu yang mewakili empat penjuru mata angin dan saling berhadapan. Posisi dan jumlah rumah di Desa Adat Ratenggaro tidak pernah berubah sejak dahulu dan seluruh bahan bangunannya merupakan bahan alami yang didapatkan di sekitar mereka. Desa adat Ratenggaro juga memiliki banyak situs megalitik berupa kubur batu tua
  <br>
    Maka tidak heran bila Desa Adat Ratenggaro sangat diminati oleh wisatawan lokal maupun mancanegara. Fasilitas dan amenitas Desa Adat Ratenggaro juga dinilai sudah baik. Terdapat wisata naik kuda serta penyewaan baju adat Sumba. Wisatawan pun dapat berbelanja kain tradisional khas Ratenggaro.";
    $deskripsi2 = "Desa Adat Ratenggaro merupakan salah satu desa yang terdapat di Kecamatan Kodi Bangedo, Kabupaten Sumba Barat Daya.  Kata Ratenggaro sendiri berasal dari dua penggalan yaitu ‘rate’ yang berarti kuburan serta ‘garo’ yang merupakan nama suku dari desa tersebut. Sejarahnya, dahulu terjadi peperangan antar suku yang menyebabkan Suku Garo terbunuh oleh suku lain dan akhirnya dikubur pada lokasi tersebut. Kisah inilah yang menyebabkan desa tersebut dinamai Desa Ratenggaro.";
    
    ?>

    
  </head>
  <body>
    <!-- Mulai Navigasi / Header-->
    <?php include 'lib/header.html'?>
    
    <!-- Selesai Navigasi / Header-->
    <!-- Mulai Bagian Destinasi Wisata Populer-->

    <!-- Foto Background-->
    <div class="col-md-12 px-0">
    <img src="Desa-Adat-Ratenggaro.jpg"style="width: 100%;height:650px;"class="img-fluid bali" alt="...">
    </div>
    <div class="carousel-caption d-none d-md-block">
          <h1 class="animate__animated animate__bounceIn delay-150 title-slider">Selamat Datang di Sumbawa</h1>
          <p class="animate__animated animate__bounceIn delay-150">Semua destinasi Wisata dalam satu Aplikasi Website.
            Kini Hadir! TravelinSkuy</p>
          
        </div>
<!-- START HALAMAN POSTINGAN-->
  <main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-white">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic"><font color="black"> <strong><?php echo $judul?></strong></font></h1>
      <p class="lead my-3"><font color="black"> <strong><?php echo $deskripsi_singkat?></strong></font></p>
    </div>
  </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
      <?php echo $title?>
      </h3>

      <article class="blog-post">
        <!-- START FOTO -->
      <img src="1.jpg" style="width:600px;height:350px;" class="img-thumbnail" alt="...">
      <!-- END FOTO -->
        <h2 style="margin-top: 30px;"class="blog-post-title"><?php echo $judul?></h2>
        <p class="blog-post-meta"><?php echo "<br/>"; echo date('l, d-m-Y'); ?> by <a href="#"><?php echo $pembuatpost?></a></p>

        <p><?php echo $deskripsi?>.</p>
        <img src="Desa-Adat-Ratenggaro.jpg" style="width:600px;height:350px;" alt="..."><br><br>
        <p><?php echo $deskripsi2?>.</p>
        <hr>
        <!-- START VIDEO YOUTBE-->
        <!--Biar Responsive pake ini ya copy aja > class="col-lg-12 col-md-12 col-sm-12"-->
        <h2>Lihat Video ini!</h2>
        <div class="row">
        <iframe class="col-lg-12 col-md-12 col-sm-12" width="560" height="315" src="https://www.youtube.com/embed/Nv-VmD--zPs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
        <br>
        
        <!-- END VIDEO YOUTBE-->
      <article class="blog-post">
        <h2 class="blog-post-title">Pemesanan Tiket ?</h2>
        <p class="blog-post-meta"><?php echo "<br/>"; echo date('l, d-m-Y'); ?> by <a href="#"><?php echo $title ?></a></p>

        <p>Ingin melakukan pemesanan tiket untuk pergi ke <?php echo $judul ?>? Yuk klik Pesan Tiket Dibawah ini ya, Sebelum Melakukan Pemesanan kita rekomendasikan untuk membaca Informasi Disini ya.</p>
        <ul>
          <li><a href="">Tips Memilih Destinasi</a></li>
          <li><a href="">Berpergian dengan Nyaman dan Aman</a></li>
          <li><a href="">Syarat dan Ketentuan Berpergian di Masa Pandemi</a></li>
        </ul>
        <p>Pilih Tombol Pesan untuk melakukan Pemesanan Tiket Berpergian, Atau Pilih Destinasi Lain untuk Mencari Destinasi yang cocok buat kamu.</p>
      </article>

      

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">Lokasi</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.9786040630033!2d120.66793061404019!3d-9.935738008925084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c5ad9bcd9441b%3A0x6433efe7ca62c3f0!2sKampung%20Adat%20Praiyawang!5e0!3m2!1sid!2sid!4v1639194121807!5m2!1sid!2sid" width="400px" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

      

        <div class="p-4">
          <h4 class="fst-italic">Bantu Share Artikel ini Yuk</h4>
          <ol class="list-unstyled">
            <li><a href="http://twitter.com/share?url=http://www.travelinkuy.com" target="_blank">Share To Twitter</a>
            </li>
            <li><a href="http://www.facebook.com/sharer.php?u=http://www.travelinkuy.com" target="_blank">Share To Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <a href="http://localhost/travelinkuy/semuapage/tipedestinasi/destinasialam/tiket/" type="button" class="btn btn-primary">Pesan Tiket</a>

  <?php include 'lib/minislide.html'?>


</main>

<!-- END HALAMAN POSTINGAN-->
  </body>
  <footer>
  <?php include 'lib/footer.php'?>
  </footer>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

  <!-- Bothelp.io widget -->
  <script
    type="text/javascript">!function () { var e = { "buttons": [{ "type": "whatsapp", "token": "081290053660" }, { "type": "messenger", "token": "http://fb.com/rizkiagungsx" }, { "type": "instagram", "token": "rizkiagung.id" }], "color": "#599AF0", "position": "right", "bottomSpacing": "", "callToActionMessage": "Message Us", "displayOn": "everywhere", "lang": "en" }, t = document.location.protocol + "//bothelp.io", o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.src = t + "/widget-folder/widget-page.js", o.onload = function () { new BhWidgetPage.init(e) }; var n = document.getElementsByTagName("script")[0]; n.parentNode.insertBefore(o, n) }();</script>
  <!-- /Bothelp.io widget -->
</html>