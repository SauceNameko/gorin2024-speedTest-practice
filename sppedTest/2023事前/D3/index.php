<?php
$text = $_POST["text"];
if (strpos($text, "rgb") === 0) {
    $explode = explode(",", substr($text, 4, -1));
    $r = str_pad(dechex($explode[0]), 2, "0", STR_PAD_LEFT);
    $g = str_pad(dechex($explode[1]), 2, "0", STR_PAD_LEFT);
    $b = str_pad(dechex($explode[2]), 2, "0", STR_PAD_LEFT);
    echo "#$r$g$b";
} else if (strpos($text, "#") === 0) {
    $r = hexdec(substr($text, 1, 2));
    $g = hexdec(substr($text, 3, 2));
    $b = hexdec(substr($text, 5, 2));
    echo "rgb($r,$g,$b)";
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
    <form action="" method="post">
        <input type="text" name="text" id="">
        <input type="submit" value="送信">
    </form>
</body>

</html>