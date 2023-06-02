<?php
// yigindilarning ko'paytmasini hisoblash
$n = 3; // n soni

$res = 1;
$sum = 0;

for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
    $res *= $sum;
}

echo $res;

