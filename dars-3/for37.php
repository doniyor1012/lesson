<?php
// N butun soni berilgan. Quyidagi yig’indini
// chiqaruvchi programma tuzilsin. 11 + 22 + ... +NN
$n=4;
$sum=0;
for ($i=1;$i<$n;$i++){
   $sum+=pow($i,$n);
}echo $sum;