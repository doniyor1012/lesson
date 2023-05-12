<?php
//A va V butun sonlari berilgan. Agar o'zgaruvchilar o'zaro teng bo'lmasa,
// A va V bu sonlarning kattasini o'zlashtirsin.
// Agar teng bo'lsa, 0 ni o'zlashtirsin. A va V ning qiymati ekranga chiqarilsin
$a=4;
$b=7;

if ($a != $b){
    $a >= $b;
    $b=$a;
}elseif ($a != $b){
    $b >= $a;
    $a=$b;
}
else{
    $a=0;$b=0;
}
echo $a."\n".$b;
