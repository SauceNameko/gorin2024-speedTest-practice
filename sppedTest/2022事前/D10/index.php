<?php
$name = $_POST["name"];
$content = $_POST["content"];
if (isset($name) && isset($content)) {
    $data = ["name" => $name, "content" => $content, "date" => date("Y年m月d日")];
    $get = file_get_contents("./log.json");
    $get_json = json_decode($get, true);
    $get_json[] = $data;
    $post_json = json_encode($get_json, true);
    $file = file_put_contents("./log.json", $post_json);
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
        content: <input type="text" name="content" id="">
        <input type="submit" value="送信">
    </form>
    <?php foreach ($get_json as $d): ?>
        <div><?php echo $d["name"] ?></div>
        <div><?php echo $d["content"] ?></div>
        <div><?php echo $d["date"] ?></div>
        <hr>
    <?php endforeach; ?>
</body>

</html>