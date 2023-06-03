<?php
$n=8;
$sum=0;
for ($i=100;$i<=200;$i++){
    if ($i % $n == 0){
        echo  $i."\n";
        $sum = $sum + $i;
    }
}echo "natija = $sum\n";
