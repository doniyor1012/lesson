<?php
//n ta butun sonlardan iborat massiv berilgan. Massivdagi har bir toq sonni
// oxirgi toq songa orttiruvchi programma tuzilsin.
// Agar toq sonlar bo’lmasa, massiv o’zgarishsiz qoldirilsin.
$a = [1, 2, 3, 4, 5,6];
$found = false; // Toq son topilganligini tekshirish uchun flag
$n = count($a); // Massiv uzunligi

// Toq sonni oxirgi toq songa orttirish
for ($i = $n - 1; $i >= 0; $i--) {
    if ($a[$i] % 2 != 0) {
        $a[$i] += 2;
        $found = true;
        break;
    }
}
if (!$found) {
    echo "Toq sonlar mavjud emas. Massiv o'zgarishsiz qoldirildi.";
} else {
    echo "Yangilangan massiv: ";
    foreach ($a as $element) {
        echo $element . " ";
    }
}


