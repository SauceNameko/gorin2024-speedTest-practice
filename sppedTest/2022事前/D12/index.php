<?php
for ($i = 1; $i < 13; $i++) {
    $day = date("Y-m-t", strtotime("2024-$i-01"));
    echo date("Y年m月d日", strtotime($day)) . "<br>";
}
