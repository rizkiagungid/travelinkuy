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
    <title>Waduk Sermo - TravelinKuy</title>

    <!-- DATA POSTINGAN -->
    <?php

    $title = "Travelin'sKuy";
    $pembuatpost = "Travelin'sKuy Team";
    $judul = "Waduk Sermo";

    $deskripsi_singkat = "Sebuah waduk besar di Kabupaten Kulon Progo. Selain berfungsi sebagai penampungan air untuk saluran irigasi area pertanian dan perkebunan, pemandangan indah di Waduk Sermo bikin tempat ini juga jadi salah satu wisata alam terbaik di Jogja!. ";
    $deskripsi = "adalah sebuah waduk besar di Kabupaten Kulon Progo. Selain berfungsi sebagai penampungan air untuk saluran irigasi area pertanian dan perkebunan, pemandangan indah di Waduk Sermo bikin tempat ini juga jadi salah satu wisata alam terbaik di Jogja!.  Kalau mau liburan yang berbeda, coba deh pengalaman unik camping di tepi Waduk Sermo untuk liburan outdoor yang seru dan gak terlupakan ! Di sini kamu juga bisa mencoba aktivitas tambahan lain seperti bermain kano atau kayak, serta memancing
  <br>
    Kamu bisa ikutan private tour 2 hari 1 malam di tepi Waduk Sermo yang bisa dipesan di Klook supaya lebih mudah. Kamu tinggal bawa diri karena akan disiapkan tenda dan campervan di sana, serta berbagai fasilitas lain seperti sarapan dan makan malam, api unggun, hingga BBQ.Lewat tour ini, kamu pun bisa memesan aktivitas tambahan seperti melukis di tepi danau, pemutaran film outdoor, kayak, dan memancing.
  <br>
    Suasana berubah semakin keemasan, mengingatkan pada novel karangan Seno Gumira Ajidarma yang berjudul negeri senja. Seperti inikah negeri itu? Sebuah negeri yang tak tak pernah mengenal siang dan malam, satu-satunya yang ada hanyalah senja, satu-satunya warna adalah jingga. Ah, mendadak kami merasa menjadi musafir yang tersesat ke negeri misterius itu. Warna remang keemasannya menyihir kami untuk duduk diam seribu bahasa sambil terus memandang telaga.";
    $deskripsi2 = "Nikmati Camping 1 sampai 2 hari diWaduk Sermo sambil menunggu Senja";
    
    ?>

    
  </head>
  <body>
    <!-- Mulai Navigasi / Header-->
    <?php include 'lib/header.html'?>
    <!-- Selesai Navigasi / Header-->
    <!-- Mulai Bagian Destinasi Wisata Populer-->

    <!-- Foto Background-->
    <div class="col-md-12 px-0">
    <img src="1.jpg"style="width: 100%;height:650px;"class="img-fluid bali" alt="...">
    </div>
    <div class="carousel-caption d-none d-md-block">
          <h1 class="animate__animated animate__bounceIn delay-150 title-slider">Selamat Datang di Waduk Sermo</h1>
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
      <img src="2.jpg" style="width:600px;height:350px;" class="img-thumbnail" alt="...">
      <!-- END FOTO -->
        <h2 style="margin-top: 30px;" class="blog-post-title"><?php echo $judul?></h2>
        <p class="blog-post-meta"><?php echo "<br/>"; echo date('l, d-m-Y'); ?> by <a href="#"><?php echo $pembuatpost?></a></p>

        <p><?php echo $deskripsi?>.</p>
        <img src="1.jpg" style="width:600px;height:350px;" alt="..."><br><br>
        <p><?php echo $deskripsi2?>.</p>
        <hr>
        <!-- START VIDEO YOUTBE-->
        <!--Biar Responsive pake ini ya copy aja > class="col-lg-12 col-md-12 col-sm-12"-->
        <h2>Lihat Video ini!</h2>
        <div class="row">
        <iframe class="col-lg-12 col-md-12 col-sm-12" width="560" height="315" src="https://www.youtube.com/embed/cIuT_x365Gw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6667274810175!2d110.1092580140129!3d-7.825054379886425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ae5c57988dbb9%3A0x6f8a554ae435286c!2sWaduk%20Sermo%20Kulonprogo!5e0!3m2!1sid!2sid!4v1639320806148!5m2!1sid!2sid" width="400px" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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