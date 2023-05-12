<?php
$a=readline();
if ($a>0){
    $a++;
}elseif ($a<0){
    $a-=2;
}else{
    $a=10;
}
echo $a;