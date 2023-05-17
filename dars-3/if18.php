<?php
//Uchta butun son berilgan. Shu sonlarni ikkitasi o'zaro teng, qolgan bittasini tartib raqami aniqlansin
$a=7;
$b=6;
$c=6;
if ($a==$b && $a==$c ){
    echo "2ta son teng";
}elseif($a==$b   ){
   echo $c."tartib raqam 3";
}elseif($a==$c) {
    echo $b."tartib raqam 2";
}elseif($b==$c ) {
    echo $a."tartib raqam 1";
}
?>

