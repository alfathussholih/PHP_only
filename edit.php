<?php
//ini set adalah fungsi di php yang digunakan untuk mengatur konfigurasi
// 1 adalah untuk mengaktifkan penampilan error
ini_set('display_errors',1);

//menyertakan file koneksi database
require 'connection.php'

//memeriksa apakah parameter id ada di url
if (isset($_GET['id'])) {
    //menyimpan nilai id dari parameter URL ke dalam variabel $id
    //dan meghapus karakter yang tidak diinginkan
    //int() digunakan untuk mengkonversi nilai menjadi integer
    $id = (int) htmlspecialchars($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>