<?php

$sum = 0;
$son1 = isset($_POST['son1']) ? $_POST['son1'] : 0;
$son2 = isset($_POST['son2']) ? $_POST['son2'] : 0;
$sum = $son1 + $son2;

?>

<!doctype html>
<html>
<head>
    <title>dars 1</title>
</head>
<body>
<h1> kalkulyator</h1>

<form action="index.php" method="post">
    <input type="text" value="<?= $son1?>" name="son1" placeholder="1-son">
    +
    <input type="text" value="<?= $son2?>" name="son2" placeholder="2-son">
=
    <?= $sum ?>
    <button type="submit">
        hisoblash
    </button>
</form>
