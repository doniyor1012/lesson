<?php
//n ta butun sonlardan iborat a massiv berilgan. b massivni hosil qiling
//. b massiv oldin a massivining juft indeksdagi elementlarini, keyin toq indeksdagi
// elementlarini o’zlashtirsin (aO, a2, a4, a6 ..., a1, a3,...). b massiv elementlarini chiqaruvchi programma tuzing. Shart operatori ishlatilmasin.

$a=[1,2,3,4,5,6,7,8,9];

//b massivdi hosil qilamiz
$b=[];
foreach ($a as $key => $element){
   $key= $element % 2 == 0;
    $b[]= $key;

} foreach ($b as $element){
    echo "element ".count($b);
}