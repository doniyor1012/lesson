<?php
//n ta elementdan tashkil topgan massiv berilgan.
// Massiv elementlari orasidan monoton o’suvchi oraliqlar sonini chiqaruvchi programma tuzilsin


function countMonotonicRanges($array)
{
    $n = count($array);
    $count = 0;

    $start = 0;
    $end = 0;

    for ($i = 1; $i < $n; $i++) {
        if ($array[$i] >= $array[$i - 1]) {
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
$elements = [1, 2, 3, 1, 2, 3, 4, 5];

// Natijani topamiz
$result = countMonotonicRanges($elements);

// Natijani chiqaramiz
echo "Massivning monoton o'suvchi oraliqlar soni: " . $result;



