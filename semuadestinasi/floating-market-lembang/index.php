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
    <title>Pasar Apung - TravelinKuy</title>

    <!-- DATA POSTINGAN -->
    <?php

    $title = "Travelin'sKuy";
    $pembuatpost = "Travelin'sKuy Team";
    $judul = "Floating Market Lembang";

    $deskripsi_singkat = "Bandung tidak hanya dikenal dengan pemandangan alam yang menarik dan wisata kulinernya saja, melainkan juga punya berbagai tempat wisata menarik yang bisa dikunjungi. Salah satunya Floating Market atau pasar terapung di jalan Grand Hotel No. 33E, Lembang, Bandung.";

    $deskripsi = "Bandung tidak hanya dikenal dengan pemandangan alam yang menarik dan wisata kulinernya saja, melainkan juga punya berbagai tempat wisata menarik yang bisa dikunjungi. Salah satunya Floating Market atau pasar terapung di jalan Grand Hotel No. 33E, Lembang, Bandung. Bukan seperti pasar pada umumnya yang berada di darat, pasar ini justru berada di atas air dengan menjajahkan jualannya di atas perahu sehingga mengapung seperti di Thailand. Tidak perlu jauh-jauh ke Thailand, karena Bandung juga punya pasar apung. Ketika berkunjung ke sini, Anda juga bisa menghabiskan waktu dengan hanya berjalan-jalan sambil menikmati indahnya pemandangan yang ditawarkan. Pemandangan yang menampilkan danau yang diisi oleh beberapa perahu yang menjajahkan makanan, kereta air, beberapa penjual makanan dipinggir danau dan wahana lainnya. ";

    $deskripsi2 = "Sambil berjalan-jalan, Anda bisa melihat-lihat beberapa spot yang menyajikan barang-barang antik khas Jepang, lukisan. Dapatkan informasi, inspirasi dan insight di email kamu. Daftarkan email Anda juga bisa menggunakan karcis masuk Anda untuk ditukarkan dengan segelas minuman soda atau milo hangat yang bisa menemani perjalanan Anda. Ingin membuat perjalanan lebih menyenangkan, sore menjelang malam adalah waktu yang tepat karena suhu udara yang dingin dan lampu-lampu akan menemani perjalanan Anda. Jangan lupa gunakan pakaian hangat";
    
    ?>

    
  </head>
  <body>
    <!-- Mulai Navigasi / Header-->
    <?php include 'lib/header.html'?>
    <!-- Selesai Navigasi / Header-->
    <!-- Mulai Bagian Destinasi Wisata Populer-->

    <!-- Foto Background-->
    <div class="col-md-12 px-0">
    <img src="../floating-market-lembang/floating-market.jpg"style="width: 100%;height:650px;"class="img-fluid bali" alt="...">
    </div>
    <div class="carousel-caption d-none d-md-block">
          <h1 class="animate__animated animate__bounceIn delay-150 title-slider">Selamat Datang di Lembang</h1>
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
      <img src="../floating-market-lembang/floating-market-2.jpg" style="width:600px;height:350px;" class="img-thumbnail" alt="...">
      <!-- END FOTO -->
        <h2 style="margin-top: 30px;"class="blog-post-title"><?php echo $judul?></h2>
        <p class="blog-post-meta"><?php echo "<br/>"; echo date('l, d-m-Y'); ?> by <a href="#"><?php echo $pembuatpost?></a></p>

        <p><?php echo $deskripsi?>.</p>
        <img src="../floating-market-lembang/floating-market-3.jpeg"style="width:600px;height:350px; alt="..."><br><br>
        <p><?php echo $deskripsi2?>.</p>
        <hr>
        <!-- START VIDEO YOUTBE-->
        <!--Biar Responsive pake ini ya copy aja > class="col-lg-12 col-md-12 col-sm-12"-->
        <h2>Lihat Video ini!</h2>
        <div class="row">
        <iframe class="col-lg-12 col-md-12 col-sm-12" width="560" height="315" src="https://www.youtube.com/embed/i2AlUSBuOyI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!-- https://youtu.be/i2AlUSBuOyI-->
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6096921680505!2d107.61599211400146!3d-6.817234968573727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e11c4a9d27e5%3A0x7bcd1ace08104f55!2sFloating%20Market%20Lembang!5e0!3m2!1sid!2sid!4v1639320074319!5m2!1sid!2sid" width="400px" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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