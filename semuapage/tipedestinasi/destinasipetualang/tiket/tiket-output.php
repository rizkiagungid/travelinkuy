<?php

$pecah = $_POST["tujuan"];
$arr =  (explode(" ",$pecah));

$harga = $arr[0];


$tujuan = $arr[1];

?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="about.css">
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
    <title>About</title>

    <!-- DATA POSTINGAN -->
</head>
<body>
    <!-- Mulai Navigasi / Header-->
    <?php include 'lib/header.html'?>
    </Div>
    <!-- Selesai Navigasi / Header-->
    </div>
    <div class="container"style="margin-top:100px;margin-bottom:500px;">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/MainLogo.png" alt="" width="72" height="57">
      <h2>Konfirmasi Pembayaran</h2>
      <strong>kode Pesanan: <?php

$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
$shuffle  = substr(str_shuffle($karakter), 0, 5);
echo $shuffle;

?></strong>
      <p class="lead">Silahkan Melakukan Pembayaran, Berikut Detail Pemesanan Tiket Yang kamu lakukan .</p>
    </div>
    <center>
    <div class="container-fluid">


   Nama Lengkap : <?php echo $_POST["nama"];?>
   <br>
   Email : <?php echo $_POST["email"];?>
   <br>
   Alamat Anda : <?php echo $_POST["alamat"];?>
   <br>
   Jumlah Tiket : <?php echo $_POST["jumlah"];?>
   <br>
    Metode Pembayaran : <?php echo $_POST["pembayaran"]; ?>
  <br>
  Tujuan Perjalanan : <?= $tujuan; ?>
  <br>
  Harga/tiket : <?= $harga; ?>
  <br>
  <br>
  Total Harga: <?php
  $subtotal = $harga * $_POST["jumlah"];
  echo "Rp.$subtotal"    

  ?>
  <br>
  <br>
  <br>
  Silahkan Transfer:
  <br>
  <?php

if($_POST["pembayaran"] == "BCA" ) {
echo "BCA<br>";
echo "1234";
}elseif($_POST["pembayaran"] == "BRI" ) {
echo "BRI<br>"; #bank
echo "2345"; #norekening
}elseif($_POST["pembayaran"] == "QRIS" ) {
echo "QIRS<br>";
echo "<img src='qris.jpeg' width='500' height='600' />";
}



?>
  <br>
  <br>
  <a href="../tiket/"><button type="button" class="btn btn-danger">Ulangi Pemesanan</button></a>
  
  <!-- Full screen modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Konfirmasi Pembayaran
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">PEMBAYARAN MU DITERIMA !</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Terima Kasih sudah Melakukan Pembelian Tiket Perjalanan di Travelinkuy
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href=".."><button type="button" class="btn btn-primary">SELESAI</button></a>
     
    </div>
    </div>
  </div>
</div>
</div>
    </div>
    </div>
    </div>
    
    </center>
       <!-- Footer -->
       <?php include 'lib/footer.php'?>
    <!-- END Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <script
    type="text/javascript">!function () { var e = { "buttons": [{ "type": "whatsapp", "token": "081290053660" }, { "type": "messenger", "token": "http://fb.com/rizkiagungsx" }, { "type": "instagram", "token": "rizkiagung.id" }], "color": "#599AF0", "position": "right", "bottomSpacing": "", "callToActionMessage": "Message Us", "displayOn": "everywhere", "lang": "en" }, t = document.location.protocol + "//bothelp.io", o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.src = t + "/widget-folder/widget-page.js", o.onload = function () { new BhWidgetPage.init(e) }; var n = document.getElementsByTagName("script")[0]; n.parentNode.insertBefore(o, n) }();</script>
</body>
</html>