<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BaGen (Barcode Generator) QR Code Version">
    <meta name="author" content="Hakko Bio Richard">
    <link rel="icon" href="">

    <title>ABSENSI</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <?php include "phpqrcode/qrlib.php"; ?>
  <?php
    date_default_timezone_set('Asia/Jakarta');
    $valueCode = base64_encode("akjd9@343#1");
    $valueToday = base64_encode(date('l'));

    $data = (object) [
      "Y29kZQ==" => $valueCode,
      "dG9kYXk=" => $valueToday
    ];

    $json = json_encode($data);
    $name = $valueToday;

  ?>

  <body>

    <div class="container">

      <form class="form-signin">
        <center><h2 class="form-signin-heading">Absensi Pengurus</h2></center>
        <center>
          <?php
            $qr = date("l");
            QRcode::png("$json", "png/$name.png", "L", 6, 6); ?><?php echo "<img src='png/$name.png' /><br/>"
          ?>
        </center>
        <br />
        <?php $a = "png/$name.png"; ?>
        <center><a class="btn btn-lg btn-primary btn-block" href="<?php echo "$a" ?>" >Download PNG</a></center>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
