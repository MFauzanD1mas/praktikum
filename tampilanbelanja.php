<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Kamera</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <h1 style="margin: 30px; text-align: center;">Fauzan Rental Kamera</h1>
    <hr>
        <form class="feed-form" method="POST">
            <h3 style="margin: 0 auto; background-color: #252327;">Silahkan Isi Data Diri Anda</h3>
            <input name="nama" required placeholder="Nama" type="text">
            <input name="notelp" required placeholder="No Telp" type="text">
            <input name="alamat" required placeholder="Alamat" type="text">
            <button class="button_submit" type="submit">submit</button>
        </form>

      <div class="maincourse">
          <div class="bungkus1">
          <h3>Ini Datamu ya</h3>
        <?php

        session_start();

          if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nama = $_POST["nama"];
            $noTelp = $_POST["notelp"];
            $alamat = $_POST["alamat"];
        
            echo "<p>Nama: " . $nama . "</p>";
            echo "<p>Nomor Telepon: " . $noTelp . "</p>";
            echo "<p>Alamat: " . $alamat . "</p>";
          }
        ?>
            </div>
        </div>
            <div class="bungkus">
              <form action="strukbelanja.php" method="POST" class="bungkus2">
                <div class="card">
                        <img src="img/mp1.jpg">
                        <input type="checkbox" name="rental[]" id="item1" value="Nikon P1000 Zoom Bulan">
                        <label for="item1"><h3>Nikon P1000 Zoom Bulan</h3><br><b>Rp20.000</b></label>
                </div>
                <div class="card">
                        <img src="img/mp2.jpg">
                        <input type="checkbox" name="rental[]" id="item2" value="Kamera Film Zoom 100x">
                        <label for="item2"><h3>Kamera Film Zoom 100x</h3><br><b>Rp1.000.000</b></label>
                </div>
                <div class="card">
                        <img src="img/mp8.jpg">
                        <input type="checkbox" name="rental[]" id="item3" value="Nikon Analog Biar Kece">
                        <label for="item3"><h3>Nikon Analog Biar Kece</h3><br><b>Rp30.000</b></label>
                </div>
                <div class="card">
                        <img src="img/mp3.jpeg">
                        <input type="checkbox" name="rental[]" id="item4" value="FujiFilm Efek Beauty">
                        <label for="item4"><h3>Fujifilm Efek Beauty</h3><br><b>Rp15.000</b></label>
                </div>
                <div class="card">
                        <img src="img/mp5.jpg">
                        <input type="checkbox" name="rental[]" id="item5" value="Canon Kamera Anak Hits">
                        <label for="item5"><h3>Canon Camera Anak Hits</h3><br><b>Rp20.000</b></label>
                </div>
                <div class="card">
                        <img src="img/mp6.jpg">
                        <input type="checkbox" name="rental[]" id="item6" value="Sony Pro Experia">
                        <label for="item6"><h3>Sony Pro Experia</h3><br><b>Rp30.000</b></label>
                </div>
                <br>
                <div class="bawah">
                <label for="tanggal" style="text-align: center;">Pilih Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" onchange="hitungtotal()">

                <label for="hari"  style="text-align: center;">Sewa Berapa Hari?</label>
                <input type="number" name="hari" id="hari" placeholder="Berapa Hari" min="1" oninput="hitungtotal()">

                <label for="totalharga"  style="text-align: center;">Totalnya Segini ya : </label>
                <input type="text" name="totalharga" id="totalharga" readonly>
                
                <button class="button_submit" type="submit">submit</button>
                </div>
              </form>
              <hr>                
            </div>
            <footer class="design" style="text-align: center;">Created By FauzanDImas</footer>
</body>
</html>