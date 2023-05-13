<?php
//Butun son berilgan. Berilgan sonni “musbat toq son",
// "manfiy juft son", "son nolga teng" va h.k. ekranga yozadigan programma tuzilsin.
$a=readline();

if ($a>99){
  echo  "3 xonali son";

}elseif ($a<0){
    echo "manfiy toq yoki juft son";
}
elseif ($a==0){
    echo "son nolga teng";
}elseif($a>9){
    echo "2 xonali son";
}elseif($a>0){
    echo  " musbat toq yoki juft son";
}


