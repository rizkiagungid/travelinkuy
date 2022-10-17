<?php



$perjalanan = [
              ["tujuan" => "air-terjun-kalela",
               "harga"  => 10.0001],
               ["tujuan" => "baduy",
               "harga"  => 10.0002],
               ["tujuan" => "Bali-air-terjun",
               "harga"  => 10.0003],
               ["tujuan" => "bintan",
               "harga"  => 10.0004],
               ["tujuan" => "danau-kelimutu",
               "harga"  => 10.0005],
               ["tujuan" => "danau-kelimutu",
               "harga"  => 10.0006],
               ["tujuan" => "floating-market-lembang",
               "harga"  => 10.0007],
               ["tujuan" => "gunungbromo",
               "harga"  => 10.0008] 
];



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
    <title>Tiket - TravelinSkuy </title>

    <!-- DATA POSTINGAN -->

<body>
    <!-- Mulai Navigasi / Header-->
    <?php include 'lib/header.html'?>
    </Div>
    <!-- Selesai Navigasi / Header-->
</div>
<main>
    <div class="py-5 text-center"style="margin-top:100px;margin-bottom:50px;">
      <img class="d-block mx-auto mb-4" src="../assets/MainLogo.png" alt="" width="72" height="57">
      <h2>Pemesanan Tiket</h2>
      <p class="lead">Silahkan Mengisi Form Pemesanan Tiket Disini.</p>
    </div>
<div class="container"style="margin-bottom:150px;">
<form action="tiket-output.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
  <label for="Nama Lengkap" class="form-label">Nama Lengkap</label>
  <input type="text"class="form-control" name="nama">
  </div>
  <div class="mb-3">
  <label for="Alamat" class="form-label">Alamat</label>
  <input type="text"class="form-control" name="alamat">
  </div>
  <div class="mb-3">
  <label for="jumlah" class="form-label">Jumlah Tiket</label>
  <input type="text"class="form-control" name="jumlah">
  </div>
  <div class="mb-3">
  <label for="pembayaran" class="form-label">Metode Pembayaran</label>
  <br>
  <select id="pembayaran" name="pembayaran">
    <option value="BCA" name="BCA">BCA</option>
    <option value="BRI" name="BRI">BRI</option>
    <option value="QRIS" name="QRIS
    ">QRIS</option>
  </select>
  </div>
  <div class="mb-3">
  <label for="tujuan" class="form-label">Tujuan Perjalanan</label>
  <br>
  <select id="tujuan" name="tujuan">
  <option value="pilih-salah-satu">Pilih Salah Satu</option>
  <?php foreach ($perjalanan as $tujuan) : ?>
    <option value="<?= $tujuan["harga"]; ?> <?= $tujuan["tujuan"]; ?>"><?= $tujuan["tujuan"] ?></option>
    <?php endforeach; ?>
  </select>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Sudah Melakukan Vaksinasi Covid19</label>
  </div>
  <button type="submit" name="bayar" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
</div>
</div>
</div>
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