<?php


$date = date('Y-m-d');

$weekday = date('w', strtotime($date));

echo $weekday;
