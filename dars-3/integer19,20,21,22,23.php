<?php
// 1 Kun boshidan boshlab N sekund vaqt o'tti.
// Kun boshidan boshlab qancha minut to’la o'tganligini aniqlovchi programma tuzilsin.
  /*  $n=1500;
$s=60;
$son=intval($n/$s);
echo $son;  */

// 2 Kun boshidan boshlab N sekund vaqt o'tti.
//Kun boshidan boshlab qancha to’la soat o'tganligini aniqlovchi programma tuzilsin.
 /* $n=18000;
$s= 3600;
$son=intval($n/$s);
echo $son;  */

// 3 Kun boshidan boshlab N sekund vaqt o'tti.
// Kun boshidan boshlab qancha minut va sekund o’tganini aniqlovchi programma tuzilsin.
    $n=7200000;
$s=3600000;
$m=60000;
$d=1000;

$son=intval($n/$s);
$son1=intval($n/$m);
$son2=intval($n/$d);
echo $son .'<br>';
echo $son1.'<br>';
echo $son2;



?>

