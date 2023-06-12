<?php

$a = 5; // Sonlarni o'zgartiring
$b = 2;
$c = 1;

$min = $a;
if ($b < $min) {
    $min = $b;
}
if ($c < $min) {
    $min = $c;
}

$max = $a;
if ($b > $max) {
    $max = $b;
}
if ($c > $max) {
    $max = $c;
}

echo "Avval kichik son: " . $min . "\n";
echo "Keyin katta son: " . $max;

