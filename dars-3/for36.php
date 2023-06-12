<?php
//N va K butun sonlari berilgan. Quyidagi yig’indini
// chiqaruvchi programma tuzilsin. 1K + 2K+ +NK
$k=4;
$n=1;
$res=1;
$sum=0;
for ($i=$n;$i<$k;$i++){
    $res=$i*$k;
    $sum+=$res;
}echo $sum;