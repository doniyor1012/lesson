<?php
//n ta elementdan tashkil topgan massiv berilgan. Massiv elementlari
// orasidan monoton kamayuvchi oraliqlar sonini chiqaruvchi programma tuzilsin


function countDecreasingRanges($array)
{
    $n = count($array);
    $count = 0;
    $start = 0;
    $end = 0;

    for ($i = 1; $i < $n; $i++) {
        if ($array[$i] <= $array[$i - 1]) {
            $end = $i;
        } else {
            $count += ($end - $start) * ($end - $start + 1) / 2;
            $start = $i;
            $end = $i;
        }
    }

    $count += ($end - $start) * ($end - $start + 1) / 2;

    return $count;
}

// Massivni namuna sifatida yaratamiz
$elements = [9, 7, 5, 3, 1, 4, 2, 0];

// Natijani topamiz
$result = countDecreasingRanges($elements);

// Natijani chiqaramiz
echo "Massivning monoton kamayuvchi oraliqlar soni: " . $result;


