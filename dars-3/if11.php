<?php
//A va V butun sonlari berilgan. Agar o'zgaruvchilar o'zaro teng bo'lmasa,
// A va V bu sonlarning kattasini o'zlashtirsin. Agar teng bo'lsa, 0 ni o'zlashtirsin.
// A va V ning qiymati ekranga chiqarilsin.

$a=2;
$b=4;
if ($a!=$b && $a>$b){
 echo    $b=$a;
}elseif ($a != $b && $a<$b){
    echo $a=$b;
}elseif ($a==$b){
    echo $a=0;$b=0;
}