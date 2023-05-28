<?php

//n butun soni berilgan (n > 0). Quyidagi yig’indini hisoblovchi
// programma tuzilsin. S = 1 + 1 /2 + 1 /3 + ... + 1 /n

$n = 3;
$s = 0;
for ($i = 1; $i < $n; $i++) {
    $s += 1 / $i;
}
echo $s;

