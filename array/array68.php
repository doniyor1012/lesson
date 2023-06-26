<?php
//n ta elementdan iborat massiv berilgan. Massivning
// eng kichik va eng katta elementlari o’rni almashtirilsin.

$n=[1,2,3,4,5,6,];
$min=1;
$max=6;
for ($i=1;$i<count($n);$i++){
    if ($n[$i] > $min){
       $min=$i;
    }if ($n[$i] < $max){
        $max=$i;
    }
}
$temp=$min;
$min= $max;

echo $temp.' '. $max;
