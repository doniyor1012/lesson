<?php
//. Og'irlik birliklari quyidagi tartibda berilgan.l-kilogramm, 2-milligramm, 3-gramm, 4-tonna, 5- sentner.
// Og'irlik birligini bildiruvchi soni berilgan va shu birlikdagi og'irlik qiymati berilgan.
// Og'irlikni kilogramda ifodalofchi programma tuzilsin.
$n=3;
$a=3;
$b=1000;
$res="";
switch ($n){
    case 1:$res=$a."milligram".($a/$b)."kilogram";break;
    case 2:$res=$a."gram".($a/$b)."kilogram";break;
    case 3:$res=$a."tonna".($a*$b)."kilogram";break;
    case 4:$res=$a."sentner".($a*$b)."kilogram";break;
    default:$res="xato";break;
}
echo $res;

