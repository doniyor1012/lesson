<?php
//Butun son berilgan. Berilgan sonni “musbat toq son",
// "manfiy juft son", "son nolga teng" va h.k. ekranga yozadigan programma tuzilsin.
$a=8;

if ($a<0 ){
 if ($a%2==0){
     echo "manfiy juft";
 }else{
     echo "manfiy toq son";
 }
}
elseif ($a>0){
   if ($a%2==0){
       echo "musbat juft son";
   }else{
       echo "musbat toq son";
   }
}elseif($a==0){
    echo "son nolga teng";
}


