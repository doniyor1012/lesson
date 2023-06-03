<?php
//. n butun soni berilgan (n > 0). Bir sikldan foydalangan holda quyidagi
// yig’indini hisoblovchi programma tuzilsin. (Olingan natija taxminan e = exp(1) ga yaqinlashadi)
//1 + 1/(1!) +1/(2!) +1/(3!) + ... +1/(n!)

$n = 5;// n butun soni

$sum = 1;
$res = 1;

for ($i = 1; $i <= $n; $i++) {
    $res *= $i;
    $sum += 1 / $res;
}

echo "Yig'indi: " . $sum;

