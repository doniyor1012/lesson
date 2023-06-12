<?php
//р/Oy raqamini berilgan. Kiritilgan oy qaysi
// faslga tegishli ekanligini chiqaruvchi programma tuzilsin. (Masalan: 2 chi oy, “qish")
$w="11-oy";
$res="";
switch ($w){
    case "1-oy":case "2-oy":case "12-oy";$res="qish"; break;
    case  "3-oy":case "4-oy": case "5-oy"; $res="bahor"; break;
    case  "6-oy":case "7-oy": case "8-oy"; $res=" yoz"; break;
    case  "9-oy":case "10-oy":case "11-oy"; $res="kuz"; break;
    default: $res="bunday fasl yo'q"; break;

}echo $res;