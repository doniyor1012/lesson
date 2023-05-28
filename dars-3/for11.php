<?php

//n butun soni berilgan (n > 0). Quyidagi yig’indini hisoblovchi programma tuzilsin. S = n2 +(n+1)2+(n+2)2 + ... (2*n)2
//(n+0)*2+(n+1)*2....(n+n)*2

$n = 3;
$s = 0;
for ($i = 0; $i <= $n; $i++) {
    $s += pow((2 * $i), 2);
    echo $s . ' <br> ';
}