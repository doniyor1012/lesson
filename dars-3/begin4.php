<?php
//4   Aylananing diametri  d  berilgan . Uning uzunligi  aniqlansin . L = π d ; π = 3,15
$d = isset($_GET['d']) ? $_GET['d'] : 0;
$l=0;
$l=M_PI*$d;
echo $l;

?>
<!doctype html>
<html>
<head>
    <title> begin 4</title>
</head>
<body>

<form action="" method="get">

    <input type="text" name="d" placeholder="d ni kiriting">
    <br>
    <button type="SUBMIT">send</button>
</form>
</body>

</html>