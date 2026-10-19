<?php

//set the default timezone to jakarta,indonesia
date_default_timezone_set('asia/Jakarta');

//get the current hour in 24-hour format
$currentHour = date("H");

//get the current minute
$currentMinute = date('i');

echo "current hour in jakarta" . $currentHour . "<br>"
echo "cunrrent minute in jakarta" . $currentminute . "<br>"
echo $currentHour . ":" . $currentMinute