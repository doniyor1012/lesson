<?php
//n ta elementdan tashkil topgan massiv berilgan. Massivda qatnashgan sonlardan
// faqat bittadan chiqaruvchi programma tuzilsin. Berilgan massiv: 74231 4524 7; Natija: 7 4 2 3 1 5


// Massivni namuna sifatida yaratamiz
$elements = [74231, 4524, 7];

// Massivning uzunligi
$n = count($elements);

// Massivning har bir elementini to'g'rilash
for ($i = 0; $i < $n; $i++) {
    $current = $elements[$i];

    // Har bir raqamni bo'lib o'tkazib chiqaramiz
    while ($current > 0) {
        $digit = $current % 10;
        echo $digit . " ";
        $current = (int)($current / 10);
    }
}

