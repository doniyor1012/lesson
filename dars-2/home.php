<?php
$a = isset($_POST['a']) ? $_POST['a'] : 0;
$b = isset($_POST['b']) ? $_POST['b'] : 0;
$c = isset($_POST['c']) ? $_POST['c'] : 0;
$d = isset($_POST['d']) ? $_POST['d'] : 0;
$e = isset($_POST['e']) ? $_POST['e'] : 0;

if($a>$b && $b>$c && $c>$d && $d>$e){
$res= "eng katta son". $a;
}elseif($b>$a && $b>$c && $c>$d && $d>$e) {
$res= "eng katta son". $b;
}elseif($c>$b && $b>$a && $a>$d && $d>$e){
$res="eng katta son". $c;
}elseif($d>$e && $e>$c && $c>$b && $b>$a){
$res="eng katta son". $d;
}elseif($e>$d && $d>$c && $c>$b && $b>$a){
$res= "eng katta son". $e;
}elseif($a==$b && $b==$c && $c==$d && $d==$e){
$res="sonlar teng";
}
echo $res;

?>

<!doctype html>
<html>
<head>
    <title> dars 2</title>
</head>
<body>
<form action="" method="POST">
    <label for="a">A:</label>
    <input type="text" name="a" placeholder="a ni kiriting">
    <br>
    <label for="b">B:</label>
    <input type="text" name="b" placeholder = "b ni kiriting">
    <br>
    <label for="c">C:</label>
    <input type="text"name="c" placeholder = "c ni kiriting ">
    <br>
    <label for="d">D:</label>
    <input type="text"name="d" placeholder = "d ni kiriting ">
    <br>
    <label for="e">E:</label>
    <input type="text"name="e" placeholder = "e ni kiriting ">
    <br>
    <button type="SUBMIT">send</button>

</form>

</body>

</html>


