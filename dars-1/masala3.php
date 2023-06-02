<?php
// n sonini bo'luvchisi bo'magan eng kichik natural son
$n = 10;
$kichik = 1;

while (true) {
    $isDivisible = false;

    for ($i = 2; $i <= $n; $i++) {
        if ($kichik % $i != 0) {
            $isDivisible = true;
            break;
        }
    }

    if (!$isDivisible) {
        echo "Eng kichik natural son: " . $kichik;
        break;
    }

    $kichik++;
}

