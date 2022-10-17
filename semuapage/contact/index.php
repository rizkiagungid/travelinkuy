<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">-->
    <link href="http://localhost/travelinkuy/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/travelinkuy/style.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="icon" type="image/x-icon" href="assets/MainLogo.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <title>Contact</title>
</head>

<body>
    <!-- Mulai Navigasi / Header-->
    <?php include 'lib/header.html'?>
    <!-- Selesai Navigasi / Header-->

    <!-- background page -->
    <div class="col-md-12 px-0">
    <img src="assets/6.jpg"style="width:2000px;height:700px;"class="img-fluid bali" alt="...">
    </div>
    <div style="color: white" class="carousel-caption  d-md-block">
          <h1 class="animate__animated animate__bounceIn delay-150 title-slider">KONTAK KAMI</h1>
          <p class="animate__animated animate__bounceIn delay-150">Semua destinasi Wisata dalam satu Aplikasi Website.
            Kini Hadir! TravelinSkuy</p>
          
        </div>
    <div class="border-bg-page">
    </div>
    
    <!-- end background page -->

    <!-- how we can help? -->
    
    <div class="container how-we-can-help">
      <br>
      <hr>
      <br>
        <center>
            <h3>Apa ada yang bisa kami bantu Traveler?</h3>
            <p>Beberapa cara yang bisa di lakukan para traveler sekalin dalam memberikan masukan atau tanggapan mengenai website kami ini, Kami siap membantu semua  traveler sekalian dalam menangani semua kendala dari kalian semua, Silahkan :)</p>
            <br>
         <hr>
      <br>
            <div class="icon-page-contact">
                <a href="#maps" class="icon-contact">
                    <img src="assets/maps.png" alt="" class="img-icon-contact">
                    <p>Locations</p>
                </a>
                <a href="mailto:mr643062@gmail.com" class="icon-contact">
                    <img src="assets/email.png" alt="" class="img-icon-contact">
                    <p>Email</p>
                </a>
                <a href="tel:+6281383959452" class="icon-contact">
                    <img src="assets/telephone.png" alt="" class="img-icon-contact">
                    <p>Call Center</p>
                </a>
            </div>

            <iframe id="maps"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505146.71577301476!2d114.79139230438352!3d-8.454692499850275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali!5e0!3m2!1sid!2sid!4v1637080490068!5m2!1sid!2sid"
                width="100%" height="350px" style="border:0; margin-top: 20px;" allowfullscreen="" loading="lazy">
            </iframe>
        </center>
      <br>
      <hr>
      <br>
    </div>
    <!-- end how we can help? -->

    <!-- Form Feedback -->
    <div class="container container-form-feedback" id="contact">
        <h3>
            Contact Developer
        </h3>

        <label for="label" class="label-input-feedback">
            Full Name*
        </label>
        <input type="text" class="input-feedback" name="fullName" onchange="changeInput(0)">
        <p class="err-message" name="fullName"></p>
        <label for="label" class="label-input-feedback">
            Phone*
        </label>
        <input type="tel" class="input-feedback" name="phone" onchange="changeInput(1)">
        <p class="err-message" name="phone"></p>
        <label for="label" class="label-input-feedback">
            Nations*
        </label>
        <input type="text" class="input-feedback" name="nations" onchange="changeInput(2)">
        <p class="err-message" name="nations"></p>
        <label for="label" class="label-input-feedback">
            Email*
        </label>
        <input type="email" class="input-feedback" name="email" onchange="changeInput(3)">
        <p class="err-message" name="email"></p>
        <label for="label" class="label-input-feedback">
            Address*
        </label>
        <textarea class="input-feedback" name="address" id="" cols="30" rows="3" onchange="changeInput(4)"
            style="resize: none;"></textarea>
        <p class="err-message" name="address"></p>
        <label for="label" class="label-input-feedback">
            Message*
        </label>
        <textarea class="input-feedback" name="message" id="" cols="30" rows="5" onchange="changeInput(5)"
            style="resize: none;"></textarea>
        <p class="err-message" name="message"></p>

        <center>
            <button class="btn-submit-feedback" onclick="submit()">
                Submit
            </button>
        </center>
      <br>
      <br>
      <hr>
      <br>
    </div>
    <!-- End Form Feedback -->

    <!-- Feedback -->
    <center>
     <?php include 'lib/feedback.html'?>
     </center>
    <!-- End Feedback -->

    <!-- Footer -->
    <?php include 'lib/footer.php'?>
    <!-- END Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <!-- Bothelp.io widget -->
    <script type="text/javascript">!function(){var e={"buttons":[{"type":"whatsapp","token":"081290053660"},{"type":"messenger","token":"http://fb.com/rizkiagungsx"},{"type":"instagram","token":"rizkiagung.id"}],"color":"#599AF0","position":"right","bottomSpacing":"","callToActionMessage":"Message Us","displayOn":"everywhere","lang":"en"},t=document.location.protocol+"//bothelp.io",o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=t+"/widget-folder/widget-page.js",o.onload=function(){new BhWidgetPage.init(e)};var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(o,n)}();</script>
    <!-- /Bothelp.io widget -->

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js'></script>

    <script>
        let err = {}
        var elementErr = document.getElementsByClassName('err-message')
        var elementInput = document.getElementsByClassName('input-feedback')

        let inputForm = {
            fullName: '',
            phone: '',
            nations: '',
            email: '',
            address: '',
            message: ''
        }

        function changeInput(idx) {
            inputForm = { ...inputForm, [elementInput[idx].name]: elementInput[idx].value }

            if (Object.keys(err).length > 0) {
                err = { ...err, [elementErr[idx].name]: elementErr[idx].innerHTML = '' }
            }
        }

        function sendToEmail() {
            const newData = {
                fullName: inputForm.fullName,
                phone: `phone: ${inputForm.phone}`,
                nations: `nations: ${inputForm.nations}`,
                email: `email: ${inputForm.email}`,
                address: `address ${inputForm.address}`,
                message: `message: ${inputForm.message}`,
            }

            emailjs.send("service_hmqukxt", "template_fwpgdpp", newData, 'user_3klKefvuYuDVa2EGf6Ri1')
                .then(res => {
                    alert('Berhasil mengirim pesan')
                    for (let i = 0; i < elementErr.length; i++) {
                        elementErr[i].innerHTML = ''
                    }
                    for (let i = 0; i < elementInput.length; i++) {
                        elementInput[i].innerHTML = ''
                    }
                    console.log(res)
                })
                .catch(err => {
                    alert('Terjadi kesalahan server\nMohon coba beberapa saat lagi')
                    console.log(err)
                })
        }

        function submit() {
            const validateEmail = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

            if (!inputForm.fullName) {
                err.fullName = 'Wajib di isi!'
                elementErr[0].innerHTML = 'Wajib di isi!'
            }
            if (!inputForm.phone) {
                err.phone = 'Wajib di isi!'
                elementErr[1].innerHTML = 'Wajib di isi!'
            }
            if (!inputForm.nations) {
                err.nations = 'Wajib di isi!'
                elementErr[2].innerHTML = 'Wajib di isi!'
            }
            if (!inputForm.email) {
                err.email = 'Wajib di isi!'
                elementErr[3].innerHTML = 'Wajib di isi!'
            } else if (validateEmail.test(inputForm.email) === false) {
                err.email = 'email yang dimasukkan tidak valid!'
                elementErr[3].innerHTML = 'email yang dimasukkan tidak valid!'
            }
            if (!inputForm.address) {
                err.address = 'wajib di isi!'
                elementErr[4].innerHTML = 'Wajib di isi!'
            }
            if (!inputForm.message) {
                err.message = 'wajib di isi!'
                elementErr[5].innerHTML = 'Wajib di isi!'
            }

            setTimeout(() => {
                for (let i = 0; i < elementErr.length; i++) {
                    if (elementErr[i].innerHTML.length === 0) {
                        err = {}
                    }
                }
            }, 0);

            if (Object.keys(err).length === 0) {
                if (window.confirm('Kirim Feefback?')) {
                    sendToEmail()
                }
            }
        }
    </script>
</body>

</html>