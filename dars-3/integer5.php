<?php
//. O-yakshanba, 1-dushanba, 2-seshanba, 3- chorshanba, 4-payshanba, 5-juma, 6-shanba
//. 1-365 oraliqda yotuvchi K soni berilgan. Agar 1-yanvar dushanba bo’lsa, kiritilgan
// K- kun haftaning qaysi kuniga to'g'ri kelishini aniqlovchi programma tuzilsin.
$n=4;
$k=50;
$x=intval($k/$n)%7;
echo $x;

