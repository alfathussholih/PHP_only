<?php
    $bg = ["red", "green", "blue"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar array di PHP</title>
    <style>
        .kotak{
            width: 200px;
            height: 200px;
            margin: 10px;
        }
    </style>
</head>
<body>
  <?php for ($i = 0; $i < count($bg); $i++) { ?>
        <div class="kotak" style = "background-color; <?php echo $bg[$i]; ?>;"></div>
  <?php } ?>
</body>
</html>