<?php
//n natural soni berilgan. 2 sonining dastlabki
// n ta darajasidan tashkil topgan massivni hosil qiling
// va elementlarini chiqaring. (1,2,4,8,....)

$n = 8;
$array = array();

for ($i = 0; $i < $n; $i++) {
    $array[] = pow(2,$i);
}
print_r($array);

