<?php
//5 ta elementdan tashkil topgan a va b massivlari berilgan. Har bir massiv elementlari
// o’sish tartibida kiritiladi. 10 ta elementdan tashkil topgan cmassivini hosil qilingki,
// s massiv elementlari o’sish tartibida joylashtirilgan bo’lsin. Masalan: a = {1,2, 3, 4}; b = {5, 6, 7, 8};
// Natija s = {1, 2, 3, 4, 5, 6, 7, 8}
$a = [2,3,1,4];
$b = [5,6,7,8,];
$c = [];

foreach  ($a as $element){
    $c[]=$element;
}
foreach ($b as $element){
    $c[]=$element;
}
echo "C massiv : ";
    foreach ($c as $element){
      echo $element.' ';
}
