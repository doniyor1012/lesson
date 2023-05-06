<?php
// Uch xonali son berilgan.: “Ushbu sonning raqamlari ketama- ket o’suvchi bo'lib joylashgan
// yoki kamayuvchi ketma-ketlikka ega".
$a=4;
$b=3;
$c=2;
if ($a>$b && $b>$c ){
    echo "sonlar ketma ket o'suvchi";
}elseif ($a<$b && $b<$c){
    echo "sonlar ketma ket kamayuvchi";
}
else{
    echo "sonlar bir xil emas";
}
?>