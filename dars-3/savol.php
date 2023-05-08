<?php
$num = 10e8;
$n = 0;
for($i = 2; $i < sqrt($num); $i++) {
    if($num % $i == 0){
        $n++;

    }
}
if ($n ==0){
    echo $num."tub son ";
}
else {
    echo $num."tub emas ";
}
?>
