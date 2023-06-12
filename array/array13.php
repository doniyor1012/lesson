<?php
//n ta elementdan tashkil topgan massiv berilgan (n toq son).
// Massiv elementlari orasidan quyidagilarini chiqaruvchi programma tuzilsin.
// A[n-1], A[n-3],... A[1]. Shart operatori ishlatilmasin.


$numbers = [1,2,3,4,5,6,7,8,9];  // Berilgan massiv
$n = count($numbers);  // Massivdagi elementlar soni

$res = [];
for ($i = $n - 1; $i >= 1; $i -= 2) {
    $res[] = $numbers[$i];
}

echo "Chiqarish natijasi: ";
print_r($res);  // Natijani chiqarish


