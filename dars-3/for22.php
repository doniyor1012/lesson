<?php
//. n butun soni va x haqiqiy soni berilgan (n > 0). Quyidagi yig’indini
// hisoblovchi programma tuzilsin. (Olingan natija taxminan ex ga yaqinlashadi)
//1 +x + x2/(2!) + x3/(3!)+ ... +xn/( n!)

$n = 5; // n butun soni
$x = 2.5; // x haqiqiy soni

$sum = 1;
$pow = 1;

for ($i = 1; $i <= $n; $i++) {
    $pow = $x^$i;
    $sum += $pow / $i;
}

echo "Yig'indi: " . $sum;

