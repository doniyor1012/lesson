<?php
//n ta elementdan iborat butun sonlardan tashkil topgan a massiv berilgan. a massivning
// juft elementlaridan tashkil topgan b massivini hosil qiling. b massiv elementlari soni va elementlari chiqarilsin

$a=[1,2,3,4,5,6];
$b=[];

foreach ($a as $element){
    if ($element % 2 == 0){
        $b[] = $element.' ';
    }
}
echo "b massivi : ";
foreach ($b as $elements){
    echo $elements.' ';
}
