<?php
$num = 17;
$n = 0;
for($i = 2; $i < $num; $i++) {
    if($num % $i == 0){
        $n++;
        break;
    }
}
if ($n ==0){
    echo $num."tub son ";
}
else {
    echo $num."tub emas ";
}
?>