<?php

$n = 100000; // n soni

// n soni stringga aylantiriladi
$n_str = $n;

if (substr($n_str, -5) === "00000") {
    echo "n soni 5 ta nol bilan tugaydi";
} else {
    echo "n soni 5 ta nol bilan tugamaydi";
}
?>