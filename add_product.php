<?php

$name = $_POST["name"];
$number = $_POST["number"];
$belt = $_POST["belt"];

$content = "Имя: $name\n Номер: $number\n Ремень: $belt";
$filename = "profile.txt";

$fp = fopen($filename, mode: "w");
fwrite($fp, $content);
fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказ оформлен!</title>
</head>
<body>
<h2>
Спасибо за заказ! <br>
В ближайшее время наш менеджер свяжется с вами!
</h2>
</body>
</html>