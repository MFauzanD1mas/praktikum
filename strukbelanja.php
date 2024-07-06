<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rental Kamera</title>
  <link rel="stylesheet" type="text/css" href="hasil.css">
</head>
<body>
  <br>
  <h1>STRUK PERSEWAAN FAUZAN RENTAL KAMERA</h1>
  <hr>
  <div class="bungkus">
    <div class="bungkus2">
      <h2 style="text-align: center;">Ini Struk Belanjamu Ya</h2>
      <?php

      if (isset($_SESSION["nama"]) && isset($_SESSION["notelp"]) && isset($_SESSION["alamat"])) {
        $nama = $_SESSION["nama"];
        $noTelp = $_SESSION["notelp"];
        $alamat = $_SESSION["alamat"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $rentalDate = $_POST["tanggal"];
          $rentalDays = $_POST["hari"];
          $totalPrice = $_POST["totalharga"];

          echo "<p>Nama             : " . $nama . "</p>";
          echo "<p>Nomor Telepon    : " . $noTelp . "</p>";
          echo "<p>Alamat           : " . $alamat . "</p>";
          echo "<p>Tanggal Sewa     : " . $rentalDate . "</p>";
          echo "<p>Lama Sewa        : " . $rentalDays . " hari </p>";
          echo "<p>Total Harga      : " . $totalPrice . "</p>";
          echo "<br><p>Diakses Pada : " . date("d F Y") ."</p>";

          $file = fopen("struk.txt", "w");

          fwrite($file, "Nama           : " . $nama . "\n");
          fwrite($file, "Nomor Telepon  : " . $noTelp . "\n");
          fwrite($file, "Alamat         : " . $alamat . "\n");
          fwrite($file, "Tanggal Sewa   : " . $rentalDate . "\n");
          fwrite($file, "Lama Sewa      : " . $rentalDays . " hari\n");
          fwrite($file, "Total Harga    : " . $totalPrice . "\n");
          fwrite($file, "Diakses Pada   : " . date("d F Y")). "\n";

          fclose($file);
        }
      } else {
        echo "<p>Data tidak tersedia.</p>";
      }
      ?>
    </div>
  </div>
  <footer style="text-align: center;"><hr style="margin-top:360px;"><p style="margin-top: 32px;">Created By FauzanDImas</p></footer>
</body>
</html>
