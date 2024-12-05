  <?php
  session_start();
  include("koneksi.php");

  ?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABSENBOS</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">

    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <div style="gap: 10px; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: white; width: 100vw; height: 100vh;">
      <h1 style="color: black; font-weight: bold;">ABSENBOS</h1>

      <div style="display: flex; flex-direction: column; justify-content: left; gap: 10px;">
        <a href="login.php" target="_blank"><button class="btn btn-warning" style="size: 50px;">Login Admin</button></a>

        <a href="karyawan/login_karyawan.php" target="_blank"><button class="btn btn-primary" style="size: 50px;">Login Karyawan</button></a>
      </div>
    </div>

    <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
  </body>

  </html>