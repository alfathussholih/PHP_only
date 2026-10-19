<?php
    $cars=["toyota","mitsubishi","bmw","volvo"];
    
    echo count($cars) . "mobil";
    echo"<br>";
    for ($i = 0; $i < count($cars); $i++){
        echo  $cars[$i];
        echo  "<br>"; 
    }
?>