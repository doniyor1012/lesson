<?php
//n ta elementdan tashkil topgan massiv berilgan. Massiv oxirgi elementidan
// kichkina bo’lgan birinchi elementni chiqaruvchi programma tuzilsin.
// Agar bunday element bo’lmasa, nol chiqarilsin.


// Massivni namuna sifatida yaratamiz
$elements = [9, 7, 5, 3,  4, 2, 8];

// Massivning uzunligi
$n = count($elements);

// Oxirgi elementni olish
$oxirgielement = $elements[$n - 1];

// Kichik elementni qidirish
$kichik = $elements[0];
for ($i = 1; $i < $n; $i++) {
    if ($elements[$i] < $kichik) {
        $kichik = $elements[$i];
    }
}

// Massivning oxirgi elementidan kichik bo'lgan birinchi elementni chiqarish
if ($kichik < $oxirgielement) {
    echo $kichik;
} else {
    echo "0";
}


