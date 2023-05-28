<?php
//   n ta elementdan tashkil topgan massiv berilgan (n juft son).
// Massiv elementlari orasidan quyidagilarini chiqaruvchi programma tuzilsin.
// A[0], A[2], A[4],... Shart operatori ishlatilmasin

/*    $son=[1,2,3,4,5,6,7,8,9];
        for ($i=1;$i<count($son);$i+=2){
             echo $son[$i].'  ';
        }
*/

    $n=8;
    $son=[];
        for ($i=0;$i<$n;$i++){
             $son[]=2*$i;
    }   print_r($son);