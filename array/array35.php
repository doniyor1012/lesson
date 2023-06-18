<?php
//n ta elementdan tashkil topgan massiv berilgan. Massiv
// lokal maksimumlari orasidan kichigini chiqaruvchi programma tuzilsin. Lokal maksimum

function findSmallestLocalMax($array)
{
    $n = count($array);
    $LocalMax = null;

    for ($i = 1; $i < $n - 1; $i++) {
        if ($array[$i] > $array[$i - 1] && $array[$i] > $array[$i + 1]) {
            if ($LocalMax === null || $array[$i] < $LocalMax) {
                $LocalMax = $array[$i];
            }
        }
    }

    return $LocalMax;
}

// Massivni namuna sifatida yaratamiz
$elements = [5, 2, 8, 3, 1, 6, 9, 4, 7];

// Natijani topamiz
$result = findSmallestLocalMax($elements);

// Natijani chiqaramiz
if ($result === null) {
    echo "Massivda lokal maksimum topilmadi.";
} else {
    echo "Massivning lokal maksimumlari orasidan kichigi: " . $result;
}


