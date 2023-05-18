<?php
//integer Uzunlik L santimetrda berilgan. Undagi to'liq metrlar sonini aniqlovchi programma tuzilsin. (1m=100sm)
   /* $l= 300 ;
$a=(100);
$b= $l/$a;
var_dump($b);
*/

//. Og'irlik M kilogramda berilgan. Undagi to'liq tonnalar sonini aniqlovchi programme tuzilsin. (1t=1000kg)
   /* $m=3000;
    $a=1000;
    $son=intval($m/$a);
 echo $son;*/

//Faylning hajmi baytlarda berilgan. Bo'lib butunni olish operatsiyasidan foydalanib
// fayl hajmining to’liq kilobaytlarda ifodalovchi programme tuzilsin. (1Kb=1024 b)
$a=10240;
$b=1024;

$son=intval($a/$b);
echo $son;

?>