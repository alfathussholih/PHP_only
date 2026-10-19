<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar array di PHP</title>
</head>
<body>
    <?php
      $bulan = [
        "januari",
        "februari",
        "maret",
        "juni",
        "juli",
        "agustus",
        "september",
        "oktober",
        "november",
        "desember",
        "april",
        "mei",
        "juni"
        "juli"
      ];  
      echo $bulan[0];
      echo "<br>";
      // count adalah fungsi untuk menghitung jumlah elemen pada array
      echo count($bulan) . "bulan";
      echo "<br>";
      echo $bulan[count($bulan) - 1];
      echo "<br>";
      echo $bulan [11];      

      // menampilkan semua isi array
      for ($i = 0; $i < count($bulan); $i++){
        echo "bulan ke- " . ($i + 1) . "adalah" . $bulan[$i];
        echo "<br>";
      }

    ?>
</body>
</html>