<?php
//n ta butun sonlardan iborat a massiv berilgan (n <= 15). a massivining toq indeksdagi
// elementlaridan b massivni hosil qiling (a1, a3, ...). b massiv elementlari soni va
// elementlarini chiqaruvchi programma tuzing. Shart operatori ishlatilmasin


// a massivini namuna sifatida yaratamiz
$a = [2, 7, 4, 9, 6, 3];

// b massivini hosil qilish
$b = [];
foreach ($a as $key => $element) {
    if ($key % 2 == 0) {
        $b[] = $element;
    }
}
// b massivi elementlari va sonini chiqarish
echo "b massivi elementlari: ";
foreach ($b as $element) {
    echo $element . " ";
}
echo "\nb massivi elementlari soni: " . count($b);


