<?php

//. n butun soni va a haqiqiy soni berilgan (n > 0). a ning n
// - darajasini aniqlovchi programma tuzilsin. an=a*a*a...a;

$s = 1;
$n = 4;
for ($i = 1; $i <= $n; $i++) {
    $s *= $n;
}
echo $s . "\n";


