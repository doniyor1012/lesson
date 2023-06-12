<?php
$s="salom,xayr,kim,adi, bu";
$n=0;
$x=[];
$x[0]="";
for ($i=0;$i<strlen($s);$i++){
    if ($s[$i]!=","){
        $x[$n].=$s[$i];

    }else{
        $n++;
        $x[$n]='';
    }
}
var_dump($x);
