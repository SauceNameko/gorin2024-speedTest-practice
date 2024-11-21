<?php
$data_1 = [1, 33, 22, 42];
$data_2 = [1, 43, 55, 33];
function calc($data_1, $data_2)
{
    $data = array_intersect($data_1, $data_2);
    foreach ($data as $d) {
        echo $d . "<br>";
    }
}
calc($data_1, $data_2);
