<?php
//n ta elementdan tashkil topgan a va b massiv berilgan. a va b massiv qiymatlarini
// almashtiruvchi va ekranga oldin a massivni keyin b massivni chiqaruvchi programma tuzilsin.

// a va b massivlarini namuna sifatida yaratamiz
$a = [1, 2, 3, 4];
$b = [5, 6, 7, 8];

// a va b massivlarining qiymatlarini almashtirish
$sum = $a;
$a = $b;
$b = $sum;

// a va b massivlarni chiqarish
echo "a massivi: ";
foreach ($a as $element) {
    echo $element . " ";
}
echo "\n b massivi: ";
foreach ($b as $element) {
    echo $element . " ";
}


?>