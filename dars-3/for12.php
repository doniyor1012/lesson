<?php
// n butun soni berilgan (n > 0). Quyidagi ko’paytmani hisoblovchi programma tuzilsin
//. S = 1.1 * 1.2 * 1.3 *... (n ta ko’payuvchi)
function calculate($n)
{
    $s = 1;

        for ($i = 1; $i <= $n; $i++) {
        $s *= (1 + ($i / 10));
    }
    return $s;
}
$res = calculate(3);
echo "sonning ko'paytmasi: $res";
