<?php
//Butun son berilgan. Berilgan sonni “musbat toq son",
// "manfiy juft son", "son nolga teng" va h.k. ekranga yozadigan programma tuzilsin.
$a=8;



if ($a<0){
    echo "manfiy toq son";
}
elseif ($a==0){
    echo "son nolga teng";
}elseif($a>9){
    echo "2 xonali son";
}elseif($a>0&& $a%2){
    echo  " musbat toq  son";
}


