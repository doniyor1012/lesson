<?php
$a=isset($_GET['a']) ? $_GET['a']:null;
$s=$a*$a;

echo  $s;

?>


<!doctype html>
<html>
<head>
    <title> begin 2</title>
</head>
<body>

<form action="" method="get">

    <input type="text" name="a" placeholder="a ni kiriting">
    <br>
    <button type="SUBMIT">send</button>
</form>
</body>

</html>