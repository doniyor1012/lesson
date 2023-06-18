<?php
//n ta elementdan tashkil topgan massiv berilgan. Massiv lokal minimumlari
//orasidan kattasini chiqaruvchi programma tuzilsin. Lokal minimum


function findLargestLocalMin($array)
{
    $n = count($array);
    $LocalMin = 0;

    for ($i = 1; $i < $n - 1; $i++) {
        if ($array[$i] < $array[$i - 1] && $array[$i] < $array[$i + 1]) {
            if ($LocalMin == 0 || $array[$i] > $LocalMin) {
                $LocalMin = $array[$i];
            }
        }
    }

    return $LocalMin;
}

// Massivni namuna sifatida yaratamiz
$elements = [5, 2, 8, 3, 1, 6, 9, 4, 7];

// Natijani topamiz
$result = findLargestLocalMin($elements);

// Natijani chiqaramiz
if ($result ==0) {
    echo "Massivda lokal minimum topilmadi.";
} else {
    echo "Massivning lokal minimumlari orasidan kattasi: " . $result;
}



