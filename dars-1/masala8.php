<?php
//n sonini teskari chiqaring
$n=12345;
$natija=0;
for ($i = 0; 0 < $n; $i++){
    $res = $n % 10;
    $n = floor($n/10);
  $natija = $natija * 10 + $res ;
}
echo $natija;