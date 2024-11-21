<?php
if (isset($_GET["num"])) {
    if ($_GET["num"] > 50) {
        echo "大きすぎます";
    } else if ($_GET["num"] < 50) {
        echo "小さすぎます";
    } else if ($_GET["num"] == 50) {
        echo "50です";
    }
}
