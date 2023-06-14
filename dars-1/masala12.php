<?php

$n=100;
$i=0;
$sum=0;
  while ($n!=0){
     $x = $n % 10;
        $sum+=$x*2**$i;
         $i++;
           $n=floor($n/10);

}
echo $sum;

