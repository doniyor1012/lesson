<?php
//K butun soni berilgan. Baho natijalarini chiqaruvchi programma tuzing.
//(1-yomon, 2-qoniqarsiz, 3-qoniqarli, 4-yahshi, 5-a’lo). Agar
// k soni 1-5 gacha oraliqqa tegishli bo'lmasa :!xato,! deb chiqarilsin.

$k=6;
$res="";
switch ($k){
    case 1: $res="yomon baho"; break;
    case 2: $res="qoniqarsiz baho"; break;
    case 3: $res="qoniqarli baho"; break;
    case 4: $res="yaxshi baho"; break;
    case 5: $res="a'lo baho "; break;
    default:$res="xato";break;
}echo  $res;

