<?php
//Uchta son berilgan. Shu sonlarni o'ratachasi (ya’ni katta va kichik sonlar orasidagi son) ni aniqlovchi programma tuzilsin.
$a=1;
$b=9;
$c=5;
if (  $b>$a && $a>$c || $c>$a && $a>$b ){
    echo $a;
}elseif ($a>$b && $b>$c || $c>$b && $b>$a ){
    echo $b;
}elseif ( $a>$c && $c>$b || $b>$c && $c>$a){
    echo $c;
}

