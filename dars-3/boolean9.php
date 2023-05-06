<?php
//Ikkita butun A va V sonlari berilgan. Jumlani rostlikka tekshiring: “A va V sonlarning faqat bittasi toq son".
/*    $a=3;
    $b=2;
if ($a % 2!=0 && $b % 2!=0){
    echo "A va B sonlarning faqat bittasi toq";
}elseif ($a % 2!=0 || $b % 2!=0){
    echo "A va B sonlarning juft";
}
else{
    echo "A va B sonlarning  bittasi toq emas";
}   */
//Ikkita butun A va V sonlari berilgan. Jumlani rostlikka tekshiring:
//“A va V sonlarining har ikkalasi ham yoki toq son yoki juft son".

 /*   $a =5;
    $b = 5;
if ($a%2!=0 && $b%2!=0){
    echo "A va B sonlari ikkalasi toq son";
}
elseif ($a%2!=0 || $b%2!=0){
    echo "A va B sonlari faqat bittasi toq son";
}
else{
    echo "A va B sonlari ikkalasi juft son";
} */

//Uchta A, V, S butun sonlar berilgan. Jumlani rostlikka tekshiring: “A, V, S sonlarning har biri musbat".
$a=4;
$b=-1;
$c=5;
if ($a>0 && $b>0 && $c>0){
    echo "hammasi musbat son";
}elseif ($a<0 || $b<0 || $c>0){
    echo "faqat bittasi manfiy";
}else{
    echo "musbat emas";
}
?>