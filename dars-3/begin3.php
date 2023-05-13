<?php
//3 To’g’ri to’rtburchakning tomonlari 	  a va  b berilgan . Uning yuzasi S = a b ;   va  P = 2( a + b )   perimetri aniqlansin .
$a = isset($_POST['a']) ? $_POST['a'] : 0;
$b = isset($_POST['b']) ? $_POST['b'] : 0;
$p= 2*($a+$b);
$s=$a*$b;
echo $p.'<br>'.$s;
?>
<!doctype html>
<html>
<head>
    <title> begin 3</title>
</head>
<body>

<form action="" method="post">

    <input type="text" name="a" placeholder="a ni kiriting">
    <br>
    <input type="text" name="b" placeholder = "b ni kiriting">
    <br>
    <button type="SUBMIT">send</button>
</form>
</body>

</html>