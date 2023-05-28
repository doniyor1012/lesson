<?php
//. n butun soni berilgan (n > 0). Shu sonning kvadratini quyidagi formula asosida hisoblovchi
// programma tuzilsin. n2= 1 +3 + 5 + ... + (2*n -1) har bir
// qo’shiluvchidan keyin natijani ekranga chiqarib boring. Natijda ekranda
// 1 dan n gacha bo’lgan sonlar kvadrati chiqariladi
$n=3;
$s=1;
for ($i=1; $i <$n ; $i++) { 
$s+=pow($n,2)*(2*$i-1);
}echo "$s\n";

?>
