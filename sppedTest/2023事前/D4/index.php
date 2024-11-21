<?php
$text = $_GET["text"];
echo preg_replace("/[0-9]/", "", $text);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="text" id="">
        <input type="submit" value="送信">
    </form>
</body>

</html>