<?php
//n ta butun sonlardan iborat a massiv va k butun soni berilgan
// (1 <= k <= n). Massivning har bir elementini a[k] ga orttiruvchi programma tuzilsin.

$a = [1, 2, 3, 4, 5];
$k = 3;
$n = count($a); // massivning uzunligini hisoblaymiz
// Massivning har bir elementini a[k] ga orttirish
for ($i = 0; $i < $n; $i++) {
    if (($i + 1) == $k) {
        $a[$i] += $k;
    }
}
echo "Yangilangan a massivi: ";
foreach ($a as $element) {
    echo $element . " ";
}



