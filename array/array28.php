<?php
//. n ta elementdan tashkil topgan massiv berilgan.
// Massiv juft indeksli elementlari orasidan kichigini aniqlovchi programma tuzilsin. min(aO, a2, a4,...)

$n=[1,2,3,4,5,6,7];
$s= count($n);
$c= 0;
for ($i=0;$i<$s;$i++){
    if ($n [$i] % 2 == 0){
        $c = $i;
        echo "kichik juft indeks $c \n";
    }
}
