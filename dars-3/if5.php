<?php
//A va V butun sonlari berilgan. Agar o'zgaruvchilar o'zaro teng bo'lmasa,
// A va V bu sonlarning kattasini o'zlashtirsin.
// Agar teng bo'lsa, 0 ni o'zlashtirsin. A va V ning qiymati ekranga chiqarilsin
$a=6;
$b=5;

if ($a != $b){
    $a >= $b;
    $a=$b;
}elseif ($a != $b){
    $b >= $a;
    $b=$a;
}
else{
    $a=0;$b=0;
}
echo $a."\n".$b;
