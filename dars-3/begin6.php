<?php
// Doiraning radiusi   R   berilgan. Uning uzunligi L va  yuzasi  S   aniqlansin.  L= 2πR;S= πR2
$r=isset($_GET['r']) ? $_GET['r']:null;
$l=2*M_PI*$r;
$s=M_PI*$r*$r;
echo $l.'<br>';
echo $s;

?>
<!doctype html>
<html>
<head>
    <title> begin 6</title>
</head>
<body>

<form action="" method="get">

    <input type="text" name="r" placeholder="r ni kiriting">
    <br>
    <button type="SUBMIT">send</button>
</form>
</body>

</html>