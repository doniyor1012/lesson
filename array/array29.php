<?php
//n ta elementdan tashkil topgan massiv berilgan. Massiv toq indeksli
// elementlari orasidan kattasini aniqlovchi programma tuzilsin. max(a1, a3, a5,...)

$n = array(1, 9, 4, 7, 5, 2, 8);
$x=0;
for ($i = 0; $i < count($n); $i +=2) {
    if ($n[$i] >$x) {
        $x=$n[$i];
    }
}echo "eng katta toq indexli element: $x ";




