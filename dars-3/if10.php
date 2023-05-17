<?php
//A va V butun sonlari berilgan. Agar o'zgaruvchilar o'zaro teng bo'lmasa, A va V o'zgaruvchilari ularning yig'indisini o'zlashtirsin.
// Agar teng bo'lsa, 0 ni o'zlashtirsin. A va V ning qiymati ekranga chiqarilsin
$a=7;
$b=7;

if ($a != $b){
 $a+=$b;
$b=$a;
}else{
    $a=0;$b=0;
}
echo $a."\n".$b;
