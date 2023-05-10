<?php
$a = isset($_POST['a']) ? $_POST['a'] : 0;
$b = isset($_POST['b']) ? $_POST['b'] : 0;
$c=($a+$b)/4;
echo $c;
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