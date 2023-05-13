<?php
//Kubning yon tomoni a berilgan. Uning hajmim V=a 3   va to’la sirti   S= 6 a aniqlansin.
$a=isset($_GET['a']) ? $_GET['a']:null;
$v=$a*$a*$a;
$s=6*$a;
echo $v.'<br>'.$s;
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