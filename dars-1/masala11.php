<?php
$s="salom,xayr,kim,adi,bu";
$n=0;
$x=[];
$x[0]=$s;
foreach ($x as $index => $element){
    if ($s[$index]!=","){
        $x[$n].=$s[$index];
    }else{
        $n++;
        $x[$n]='';
    }
}
var_dump($x);