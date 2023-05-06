<?php
//Ikkita butun A va V sonlari berilgan. Jumlani rostlikka tekshiring: “A va V sonlari toq sonlar".
//Ikkita butun A va V sonlari berilgan.Jumlani rostlikka tekshiring:“A va V sonlarning hech bo’lmaganda bittasi toq son".
//Ikkita butun A va V sonlari berilgan. Jumlani rostlikka tekshiring: “A va V sonlarning faqat bittasi toq son".
//Ikkita butun A va V sonlari berilgan.Jumlani rostlikka tekshiring: “A va V sonlarining har ikkalasi ham yoki toq son yoki juft son".
 /*   $a=7;
    $b=5;
    if( $a%2!=0 && $b%2!=0){
        echo "A va B sonlar toq";
    }else {
        echo "A va B sonlar toq emas";
    }
*/
   /* $a =4;
    $b = 3;
    if ($a%2!=0 && $b%2!=0){
       echo "A va B sonlari toq son";
    }
    elseif ($a%2!=0 || $b%2!=0){
        echo "A va B sonlari faqat bittasi toq son";
    }
    else{
         echo "A va B sonlari toq emas";
    } */
$a=5;
$b=5;
if ($a % 2!=0 && $b %2!=0){
    echo "A va B sonlar toq";
}
elseif ($a % 2!=0 || $b % 2!=0){
    echo "A va B sonlarning bittasi toq";
}
else{
    echo "A va B sonlar juft";
}
?>

