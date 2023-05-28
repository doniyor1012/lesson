<?php
//n butun soni va a haqiqiy soni berilgan (n > 0). Bir sikldan foydalanib a ning 1 dan n
// gacha bo’lgan barcha darajalarini chiqaruvchi programma tuzilsin

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    $a = pow($i, 2);
    echo "daraja $i: α = $a"."\n" ;
}

