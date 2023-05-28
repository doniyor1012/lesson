<?php
//n natural soni berilgan. Dastlabki n ta toq sondan tashkil
// topgan massivni hosil qiling va elementlarini chiqaring

$n = 6;
$son =[];
for ($i = 1; $i <= $n; $i++) {
    $son[] = 2 * $i - 1;
}
print_r($son);


