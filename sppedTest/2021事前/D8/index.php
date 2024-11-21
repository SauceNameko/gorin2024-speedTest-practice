<?php
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["number"])) {
    if (!$_POST["name"]) {
        echo "nameを入力してください";
    }
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "アドレスの形式を確認してください";
    }
    if ($_POST["number"] < 0 || $_POST["number"] > 10) {
        echo "1~10の整数で入力してください";
    }
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
        name: <input type="text" name="name" id="">
        email: <input type="email" name="email" id="">
        num: <input type="number" name="number" id="">
        <input type="submit" value="送信">
    </form>
</body>

</html>