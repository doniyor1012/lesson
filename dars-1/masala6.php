<?php

// n sonigacha fibonachi sonlarni ketma krtligini aniqlash
$f1=0;
$f2=1;
print ($f1)."\n";
print ($f2)."\n";
$n=20;
for ($i=0;$i<=$n;$i++){
    $son=$f1;
        $f1=$f2;
            $f2=$son+$f2;
                if ($f2>$n){
                    break;
                }else{
                    print ($f2)."\n";
                }
}