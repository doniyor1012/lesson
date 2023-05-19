<?php
//A, V haqiqiy va amal butun soni berilgan. A va V sonlari ustida arifmetik amallar bajaruvchi progaramma tuzilsin.
// amal quyidagi qiymatlarni qabul qiladi: 1-qo'shish, 2-ayirish, 3-bo'lish, 4- ko'paytirish.
$n=5;
$a=30;
$b=50;
$res="";
switch ($n){
    case 1:$res=$a+$b;break;
    case 2:$res=$a-$b;break;
    case 3:$res=$a*$b;break;
    case 4:$res=$a/$b;break;
    default:$res="bunday amal yo'q";break;
}echo $res;
