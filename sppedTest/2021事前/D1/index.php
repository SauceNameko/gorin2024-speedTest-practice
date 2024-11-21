<?php
$pdo_dsn = "mysql:host=mariadb;dbname=test;charset=utf8mb4";
$pdo_user = "root";
$pdo_password = "root";
$pdo = new PDO($pdo_dsn, $pdo_user, $pdo_password);
$data = $pdo->query("SELECT * FROM  users");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($data as $da): ?>
        <div><?php echo $da["id"]; ?></div>
        <div><?php echo $da["name"]; ?></div>
        <div><?php echo $da["email"]; ?></div>
        <div><?php echo $da["password"]; ?></div>
        <hr>
    <?php endforeach ?>
</body>

</html>