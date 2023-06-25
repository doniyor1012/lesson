<?php
//. n ta butun sonlardan iborat a massiv berilgan. a massivning musbat elementlaridan
// tashkil topgan b va manfiy elementlaridan tashkil topgan s massivni hosil qiling.
// Oldin b massiv elementlari soni va elementlarini, keyin s massiv elementlari soni va elementlarini chiqaruvchi programma tuzilsin.

$a=[-1,-2,-3,1,2,3];
$b=[];
$s=[];
foreach ($a as $element){
   if ($element > 0){
      echo $b[]=$element;
  }
         elseif( $element < 0){
            $s[] = $element;
  }
}
$x=count($b);
   echo "\n B massiv elmentlar soni $x";
      echo "\n B massiv :";
         foreach ($b as $element){
            echo $element.' ';
 }
 $w=count($s);
    echo "\n S massiv elementlar soni $w";
       echo "\n S massiv :";
          foreach ($s as $element){
              echo $element.' ';
   }