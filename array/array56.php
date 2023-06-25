<?php
//n ta butun sonlardan iborat a massiv berilgan (n <= 15). a massivining
// 3 ga karrali indeksdagi elementlaridan b massivni hosil qiling (aZ, a6, ...).
// b massiv elementlari soni va elementlarini chiqaruvchi programma tuzing. Shart operatori ishlatilmasin

$a=[1,2,3,4,5,6,7];
$x=0;
//b massivni hosil qilish
$b=[];
foreach ($a as $key => $element){
    $element =
    $b[]=$element;
}echo "b massivdagi elementlar :";
foreach ($b as $element){
    echo "\n b massivdagi elementlar soni " .count($b);
}