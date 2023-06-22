<?php

// Massivni namuna sifatida yaratamiz
$elements = [2, 4, 3, 6, 2, 1, 4, 2, 5, 4, 2];
$n = count($elements);
$x = 0;
$son= [];

foreach ($elements as $qiymat) {
    if (isset($son[$qiymat])) {
        $son[$qiymat]++;
    } else {
        $son[$qiymat] = 1;
    }
}
foreach ($son as $count) {
    if ($count > $x) {
        $x = $count;
    }
}
echo "Eng ko'p qatnashgan bir xil qiymatli element soni: $x";

?>
