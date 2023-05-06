<?php
//Jumlani rostlikka tekshiring:
//Berilgan uchta butun sonlarning hech bo’lmaganda 2 tasi bir birigateng”.
$a = 1;
$b = 1;
$c = 2;
if ($a==$b || $a==$c||$c==$a || $c==$b ||$b==$c || $b==$a){
    echo "hech bo'lmaganda 2 tasi bir biriga teng";
}
else{
    echo "false";
}
?>