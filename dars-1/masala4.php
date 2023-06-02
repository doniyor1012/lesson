<?php
//A1 ,B1 ,C1   ,A2  , B2 , C2  koeffisentlari berilgan, chiziqli tenglamalar
// sistemasi yechimlarini aniqlaydigan programma tuzilsin.
// x = ( C1B2 – C2B1)/D, y= (A1C2-A2C1 ) /D, D= (A1B2 –A2B1)
$a1=3;
$a2=4;
$b1=5;
$b2=6;
$c1=7;
$c2=8;
$d=($a1*$b2 - $a2*$b1);
$x=($c1*$b2 - $c2*$b1)/$d;
$y=($a1*$c2 - $a2*$c1)/$d;
echo $d.' '.$x.' '.$y;
