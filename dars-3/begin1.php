<?php
//Begin 1  Kvadratning tomoni    a  berilgan .Uning perimetri aniqlansin . P = 4a;
$a=isset($_GET['a']) ? $_GET['a']:null;
$p=0;
$p=4*$a;
echo $p;
?>
<!doctype html>
<html>
<head>
    <title> begin 1</title>
</head>
<body>

<form action="" method="get">

    <input type="text" name="a" placeholder="a ni kiriting">
    <br>
    <button type="SUBMIT">send</button>
</form>
</body>

</html>