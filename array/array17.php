<?php
//n ta elementdan tashkil topgan massiv berilgan. Massiv elementlarini quyidagicha
// chiqaruvchi programma tuzilsin. A[0], A[1], A[n-1], A[n-2], A[3], A[4], A[n-3], A[n-4],...


$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];  // Massiv elementlari
$n = count($array);  // Massivdagi elementlar soni

$result = [];
$result[] = $array[0];
$result[] = $array[1];

for ($i = $n - 1; $i >= 3; $i--) {
    if (($n - $i) % 2 == 1) {
        $result[] = $array[$i];
    }
}

if ($n >= 4) {
    $result[] = $array[3];
    $result[] = $array[4];
}

echo "Chiqarish natijasi: ";
print_r($result);




