<?php
$n=isset($_GET['n']) ? $_GET['n']:null;
$sum = 0;
if($n){
    for($i=$n ; $i>0; $i =  ($i * 10)){
  $sum += ($i%10);
    }
}
echo "Sum=". $sum;

?>

<!doctype html>
<html>
<head>
    <title> dars 2</title>
</head>
<body>
 
<form action="" method="get">

    

    <input type="text" name="n">
   
    <button type="SUBMIT">send</button>

</form>

</body>

</html>


