<?php
//Uzinlik birliklari quyidagi tartibda berilgan. 1-desimetr, 2-kilometr, 3-metr, 4-millimeter, 5- santimetr.
// Uzunlik birligini bildiruvchi son berilgan (1-5 oraliqda) va shu birlikdagi kesma uzunligi berilgan
// (haqiqiy son). Kesmaning uzunligini metrlarda ifodalofchi programma tuzilsin.
$n=4;
$u=500;
$b=100;

$res="";
switch ($n){
    case 1:$res=$u."desimetr".($u/$b)."metr";break;
    case 2:$res=$u."kilometr".($u*$b)."metr";break;
    case 3:$res=$u."millimetr".($u/$b)."metr";break;
    case 4:$res=$u."santimetr\n".($u/$b)."metr";break;
    default:$res="bunday uzunlik yo'q";break;
}echo $res;




