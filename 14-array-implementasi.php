<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar array di PHP</title>
</head>
<body>
    <select>
        <option value="">pilih tanggal</option>
        <?php
        for ($x = 1; $x <= 31; $x++){
            echo"<option value=''>$x</option>";
        }
        ?>
    </select>
</body>
</html>