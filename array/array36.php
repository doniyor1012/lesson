<?php
//. n ta elementdan tashkil topgan massiv berilgan. Massivning lokal minimum
// yoki lokal maksimum bo’lmagan elementlari orasidan kattasini chiqaruvchi
// programma tuzilsin. Agar bunday element bo’lmasa nol chiqarilsin.

function findLargestNonLocal($array)
{
    $n = count($array);
    $largestNonLocal = null;

    for ($i = 0; $i < $n; $i++) {
        $isLocalMin = false;
        $isLocalMax = false;

        if ($i > 0 && $i < $n - 1) {
            if ($array[$i] < $array[$i - 1] && $array[$i] < $array[$i + 1]) {
                $isLocalMin = true;
            } elseif ($array[$i] > $array[$i - 1] && $array[$i] > $array[$i + 1]) {
                $isLocalMax = true;
            }
        }

        if (!$isLocalMin && !$isLocalMax) {
            if ($largestNonLocal == 0 || $array[$i] > $largestNonLocal) {
                $largestNonLocal = $array[$i];
            }
        }
    }

    return $largestNonLocal;
}

// Massivni namuna sifatida yaratamiz
$elements = [5, 2, 8, 3, 1, 6, 9, 4, 7];

// Natijani topamiz
$result = findLargestNonLocal($elements);

// Natijani chiqaramiz
if ($result == 0) {
    echo "Massivda lokal minimum yoki lokal maksimum bo'lmagan elementlar yo'q.";
} else {
    echo "Massivning lokal minimum yoki lokal maksimum bo'lmagan elementlari orasidan kattasi: " . $result;
}


