<?php
$data_1 = [];
$data_2 = [];
$f_1 = fopen("../data1.csv", "r");
while ($data = fgetcsv($f_1)) {
    $data_1[] = $data;
}
fclose($f_1);
$f_2 = fopen("../data2.csv", "r");
while ($data = fgetcsv($f_2)) {
    $data_2[] = $data;
}
fclose($f_2);
$num = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>質問番号</th>
            <th>実際の解答</th>
            <th>提出の解答</th>
        </tr>

        <?php foreach ($data_1 as $ddd => $aaa): ?>
            <tr>
                <td><?php echo $aaa[0] ?></td>
                <td><?php echo $aaa[1] ?></td>
                <td><?php echo $data_2[$ddd][1]  ?></td>
            </tr>
            <?php if ($aaa[1] == $data_2[$ddd][1]): ?>
                <?php $num++; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </table>
    スコア <?php echo $num . "/"  . count($data_1); ?>
</body>

</html>