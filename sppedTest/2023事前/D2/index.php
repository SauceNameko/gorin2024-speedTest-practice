<?php
$date_1 = new DateTime($_GET["date1"]);
$date_2 = new DateTime($_GET["date2"]);
echo "出力:" . $date_1->diff($date_2)->days . "日";
