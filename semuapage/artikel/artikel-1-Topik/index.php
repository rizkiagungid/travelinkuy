<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">-->
    <link href="http://localhost/travelinkuy/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- START Custom CSS -->
    <link rel="stylesheet" href="http://localhost/travelinkuy/style.css">
    <link rel="stylesheet" href="add.css">
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
    <link rel="icon" type="image/x-icon" href="assets/MainLogo.png" />

    <!-- Animasi-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    
    <!-- Fontawesome-->
    <script src="https://kit.fontawesome.com/ffbe25f2fc.js" crossorigin="anonymous"></script>

    <!-- Homepage -->
    <title>Artikel 1 - TravelinKuy</title>

    <!-- DATA POSTINGAN -->
    <?php

    $title = "Travelin'sKuy";
    $pembuatpost = "TravelinSkuy Team";
    $judul = "Tips Memilih Destinasi";

    $deskripsi_singkat = "Memilih destinasi wisata ternyata tidak mudah dan jangan sampai tanpa pertimbangan. Hal tersebut penting karena akan berkaitan dengan kondisi kenyamanan, keamanan hingga yang paling utama agar budget tidak berlebih. Untuk itu, pastikan Anda sebelum memutuskan untuk pergi ke beberapa tempat, ada baiknya cobalah memilih destinasi tujuan. Seperti tips memilih destinasi wisata berikut ini yang perlu diketahui";

    $deskripsi = "Memilih destinasi wisata ternyata tidak mudah dan jangan sampai tanpa pertimbangan. Hal tersebut penting karena akan berkaitan dengan kondisi kenyamanan, keamanan hingga yang paling utama agar budget tidak berlebih. Untuk itu, pastikan Anda sebelum memutuskan untuk pergi ke beberapa tempat, ada baiknya cobalah memilih destinasi tujuan. Seperti tips memilih destinasi wisata berikut ini yang perlu diketahui";

    $deskripsi2 = "Bagi sebagian orang, wisata sejarah adalah hal yang diinginkan sebagai destinasi wisata saat liburan kali ini. Terutama bagi anak anak sekolah, memang kebanyakan tempat ini dikunjungi oleh anak anak sekolah dan juga wisatawa asing yang ingin tahu mengenai berbagai tempat bersejarah di Indonesia. Misalnya candi, peninggalan benda di museum, gedung, dan sebagainya yang memiliki nilai dan makna sejarah di masa lalu. Seperti contohnya : ";
    
    $deskripsi3 = "Anda juga bisa memilih destinasi wisata ini. Pilihan yang tersedia juga banyak. Misalnya dengan menelusuri gua, menyelam di kedalaman laut, bercengkrama dengan binatang dan tumbuhan langka berselancar, mendaki gunung, mengunjungi hutan maupun suaka alam, atau mengunjungi spot-spot menarik di alam ini seperti melihat sunset dari sudut yang tepat, mandi di air terjun, mengikuti alur sungai dan sebagainya. Memang bagi sebagian orang ini adalah hal yang sangat menarik perhatian mereka. Seperti Contohnya : ";

    $deskripsi4 = "Wisata religi ini juga identik dengan ziarah dan sebagainya. Misalnya berkunjung ke makam leluhur, masjid bersejarah, bangunan bersejarah seperti candi, tempat pemujaan dan sebagainya. Wisata religi ini bukan hanya sekedar mengambil foto dan spot dalam lokasi itu. Melainkan mengambil hikmat dengan apa yang ada didalamnya.

    Wisata religi ini kan hubungannya erat dengan soal keagamaan, jadi wisata ini tidak hanya dijadikan sebagai ajang hiburan, tapi sebagai ajang untuk lebih tahu tentang nilai sejarah agamanya masing masing. Seperti Contohnya : ";

    ?>

    
  </head>
  <body style="background-color: #ffffff;">
    <!-- Mulai Navigasi / Header-->
     <?php include 'lib/header.html'?>
    <!-- Selesai Navigasi / Header-->
    <!-- Mulai Bagian Destinasi Wisata Populer-->

    <!-- Foto Background-->
    <div class="col-md-12 px-0">
    <img src="../artikel-1-Topik/3.jpg"style="width:2000px; height:630px; "class="img-fluid bali" alt="...">
    </div>
    <div style="color: white" class="carousel-caption d-md-block">
          <h1 class="animate__animated animate__bounceIn delay-150 title-slider">Tips Memilih Destinasi</h1>
          <p class="animate__animated animate__bounceIn delay-150">Semua destinasi Wisata dalam satu Aplikasi Website.
            Kini Hadir! TravelinSkuy</p>
          
        </div>
  <div class="border-bg-page">
  </div>
<!-- START HALAMAN POSTINGAN-->
  <main class="container">
  
  <div class="row g-5">
    <div class="col-md-8">

      <article class="blog-post">

        <h2 style="margin-top: 30px;"class="blog-post-title"><?php echo $judul?></h2>
        <hr>
        <p class="blog-post-meta"><?php echo "<br/>"; echo date('l, d-m-Y'); ?> by <a href="#"><?php echo $pembuatpost?></a></p>

        <p><?php echo $deskripsi?>.</p>
        <h2 style="margin-top: 30px;"class="blog-post-title">Jenis Jenis Destinasi Wisata</h2>
        <img src="../artikel-1-Topik/4.jpg" width="700" height="500" alt="..."><br><br>
        <p><?php echo $deskripsi?>.</p>
        <br>
        <!-- END VIDEO YOUTBE-->
      <article class="blog-post">
        <h2 class="blog-post-title">Wisata sejarah </h2>
        <img src="../artikel-1-Topik/2.jpg" width="700" height="500" alt="..."><br><br>
        <p><?php echo $deskripsi2 ?></p>
        <ul>
          <li>Lawang Sewu, Semarang</li>
          <li>Jam Gadang, Bukittinggi</li>
          <li>Istana Maimun, Medan</li>
        </ul>
        <p></p>
      <article class="blog-post">
        <h2 class="blog-spot-tittle">Wisata alam </h2>
        <img src="../artikel-1-Topik/5.jpg" width="700" height="500" alt="..."><br><br>
        <p><?php echo $deskripsi3 ?></p>
        <ul>
          <li>Taman Wisata Alam Telaga Warna, Bogor</li> 
          <li>Taman Wisata Alam Guci, Tegal</li> 
          <li>Taman Wisata Alam Lejja, Soppeng</li>
        </ul>
        <p></p> 
      <article class="blog-post">
        <h2 class="blog-spot-tittle">Wisata religi </h2>
        <img src="../artikel-1-Topik/6.jpg" width="700" height="500" alt="..."><br><br>
        <p><?php echo $deskripsi4 ?></p>
        <ul>
          <li>Masjid Istiqlal, jakarta</li> 
          <li>Masjid Dian Al Mahri, Depok</li> 
          <li>Masjid Cheng Ho, Surabaya</li> 

    </div>
    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        

        <div class="p-4">
          <h4 class="fst-italic">Artikel</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="http://localhost/travelinkuy/semuapage/artikel/artikel-1-Topik/">Tips Memilih Destinasi</a></li>
            <li><a href="http://localhost/travelinkuy/semuapage/artikel/artikel-2-Topik/">Apa Sih Staycation</a></li>
            <li><a href="http://localhost/travelinkuy/semuapage/artikel/artikel-3-Topik/">Hemat Uang Saat Travel</a></li>
            <li><a href="http://localhost/travelinkuy/semuapage/artikel/artikel-4-Topik/">Tips Anti Begal</a></li>
            <li><a href="http://localhost/travelinkuy/semuapage/artikel/artikel-5-Topik/">Alasan Traveling Lokal</a></li>
          </ol>
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
<div>
  <?php include 'lib/minislide.html'?>
  </div>
</main>

<!-- END HALAMAN POSTINGAN-->
  
  <footer>
  <?php include 'lib/footer.php'?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html>