<?php
//. n butun soni berilgan (n > 0). Agar n soni 3 ning darajasi bo’lsa “3 - ning darajasi",
// aks xolda “3 -ning darajasi emas" degan natija chiqaruvchi programma tuzilsin.
// Qoldiqli bo'lish va bo’lish amallarini ishlatmang.

$n=3;
while ($n){
    if ($n==pow($n,3)){
    echo "3-ning darajasi$n";
    }else{
        echo "3-ning darajasi emas$n";
    }
}