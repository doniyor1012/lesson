<?php
//n ta elementdan tashkil topgan massiv berilgan. Massivda juft va toq elementlar
// ketma - ket kelishini tekshiruvchi programma tuzilsin. Ketma - ketlik bajarilsa nol chiqarilsin.
// Aks holda ketma - ketlikni buzgan birinchi element indeksi chiqarilsin

$array=[1,2,3,4,5,6,7,8,9];
$n=count($array);
$son=true;
for ($i=0;$i<$n-1;$i++){
    if ($array[$i] %2 == $array[$i +1 ]%2){
        $son=false;
        echo "ketma-ketlikni buzgan son $i";
        break;
    }elseif($son){
        echo "ketma-ketlik bajarildi";
    }
}