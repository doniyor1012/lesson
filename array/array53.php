<?php
//n ta elementdan tashkil topgan a va b massiv berilgan. s massivni hosil qiling.
// c[i] = max (a[i], b[i]), ya’ni s massiv elementi a va b massiv elementlaridan kattasini qabul qilsin


// a va b massivlarini namuna sifatida yaratamiz
$a = [5, 3, 9, 2];
$b = [7, 4, 6, 8];
$s = [];

for ($i = 0; $i < count($a); $i++) {
    $s[] = max($a[$i], $b[$i]);
}
echo "s massivi: ";
foreach ($s as $element) {
    echo $element . " ";
}


