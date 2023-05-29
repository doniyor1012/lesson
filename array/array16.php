<?php
//n ta elementdan tashkil topgan massiv berilgan. Massiv elementlarini quyidagicha
// chiqaruvchi programma tuzilsin. A[0], A[n-1], A[1], A[n-2], A[2], A[n-3],...

$array = [1, 2, 3, 4, 5, 6, 7, 8 ];  // Massiv elementlari
$n = count($array);  // Massivdagi elementlar soni

$res = [];
for ($i = 0; $i < $n / 2; $i++) {
    $res[] = $array[$i];
    $res[] = $array[$n - 1 - $i];
}

if ($n % 2 != 0) {
    $res[] = $array[$n / 2];
}

echo "natija : ";
print_r($res);



