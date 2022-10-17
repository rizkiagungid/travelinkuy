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
    <title>Artikel 4 - TravelinKuy</title>


    <!-- DATA POSTINGAN -->
    <?php

    $title = "Travelin'sKuy";
    $pembuatpost = "TravelinSKuy Team";
    $judul = "Tips n Trik Tidak Terbegal";

    $deskripsi_singkat = "Kasus pembegalan pada pengendara motor di malam hari masih menjadi momok bagi banyak orang. Terutama mereka yang sering berkendara atau baru pulang kerja saat malam tiba. Jalanan yang sepi serta minim penerangan, seringkali menjadi spot andalan bagi para pelaku kejahatan yang satu ini.
    <p></p>
    Untuk itu, para pengendara dihimbau agar lebih berhati-hati saat melewati jalanan yang gelap dan sepi. Sebab, ketika terjadi aksi pembegalan, susah untuk mencari pertolongan pada orang-orang di sekitar.
    <p></p>
    Maka dari itu, terdapat beberapa tips berkendara yang bisa Anda lakukan untuk menghindari terjadinya aksi pembegalan. Penasaran apa saja, kan? Simak informasinya pada artikel berikut ini, ya.";

    $deskripsi = "Cara pertama untuk menghindari begal adalah dengan memilih rute yang sudah biasa Anda lewati. Tak perlu mencari jalan tikus yang dapat mengantarkan Anda lebih cepat sampai ke tujuan. Daripada membahayakan keselamatan nyawa sendiri, lebih baik Anda melewati jalanan yang agak jauh namun terjamin aman.";

    $deskripsi2 = "Seperti yang telah disinggung sebelumnya, begal kerap melancarkan aksinya di jalanan yang sepi dan minim pencahayaan. Nah, untuk menghindari hal tersebut, Anda bisa memilih jalanan yang lebih ramai dan banyak dilewati oleh pengendara sekaligus memiliki pencahayaan yang cukup terang.
    <p></p>
    Sehingga, jika terjadi hal-hal yang tidak diinginkan, lebih mudah bagi Anda untuk meminta bantuan atau pertolongan.";
    
    $deskripsi3 = "Jika Anda terpaksa harus berkendara di malam hari, sebaiknya ajak seorang teman untuk berboncengan. Cara ini terbukti ampuh menghindarkan Anda dari tindak kejahatan begal. Karena biasanya, para pelaku begal hanya menargetkan pengendara motor yang sendirian.";

    $deskripsi4 = "Sebelum Anda berkendara, ada baiknya untuk memeriksa setiap kondisi komponen motor yang terpasang. Hal ini untuk menghindari kendaraan Anda mogok di tengah jalan. Apalagi jika mogoknya di tempat yang sepi dan jarang dilewati oleh pengendara lain.
    <p></p>
    Periksa setiap bagian yang penting mulai dari busi, karburator, ban motor, rantai, aki dan lain-lain. Pastikan semuanya dalam kondisi prima agar tidak muncul kendala saat digunakan berkendara.";

    $deskripsi5 = "Jika Anda terpaksa harus berkendara sendirian di tengah malam. Maka pastikan Anda membawa senjata untuk melindungi diri sendiri. Tidak perlu menggunakan benda-benda tajam. Cukup bekali diri dengan chili atau pepper spray dan alat setrum kejut.";
    ?>

    
  </head>
  <body style="background-color: #ffffff;">
    <!-- Mulai Navigasi / Header-->
    <?php include 'lib/header.html'?>
    <!-- Selesai Navigasi / Header-->
    <!-- Mulai Bagian Destinasi Wisata Populer-->

    <!-- Foto Background-->
    <div class="col-md-12 px-0">
    <img src="../artikel-4-Topik/travel4.jpg"style="width:2000px; height:700px; "class="img-fluid bali" alt="...">
    </div>
    <div style="color: white" class="carousel-caption  d-md-block">
          <h1 class="animate__animated animate__bounceIn delay-150 title-slider">Tips Anti Begal Saat Traveling</h1>
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

        
        <p><?php echo $deskripsi_singkat?></p>
        <img src="../artikel-4-Topik/2.jpg" width="700" height="500" alt="..."><br><br>
        <h2 style="margin-top: 30px;"class="blog-post-title">Pilih Rute yang Anda Demen</h2>
        <p><?php echo $deskripsi?>.</p>
        <br>
        
        <!-- END VIDEO YOUTBE-->
      <article class="blog-post">
        <h2 class="blog-post-title">Pilihlah Jalanan yang Ramai</h2>
        <p><?php echo $deskripsi2 ?></p>
        <p></p>
      <article class="blog-post">
        <h2 class="blog-post-title">Ajak Dulur Dulur Untuk Berboncengan</h2>
        <p><?php echo $deskripsi3 ?></p>
        <p></p>
      <article class="blog-post">
        <h2 class="blog-post-title">Periksa Seluruh Komponen Rotom Sebelum Berkendara</h2>
        <p><?php echo $deskripsi4 ?></p>
        <p></p>
      <article class="blog-post">
        <h2 class="blog-post-title">Bawa Sajam Apa Wehhhlah Pikeun Baku Hantem Sareng Begalna</h2>
        <p><?php echo $deskripsi5 ?></p>
        <p></p>


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
  <?php include 'lib/minislide.html'?>

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