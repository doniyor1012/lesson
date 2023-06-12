<?php
//n ta elementdan tashkil topgan massiv berilgan. Massivda juft va toq elementlar
// ketma - ket kelishini tekshiruvchi programma tuzilsin. Ketma - ketlik bajarilsa nol chiqarilsin.
// Aks holda ketma - ketlikni buzgan birinchi element indeksi chiqarilsin
$arr = [1,2,3,4,5,6,8]; // Massivni o'zgartiring
$n = count($arr);
$even = $arr[0] % 2 == 0;
for ($i = 1; $i < $n; $i++) {
    if ($arr[$i] % 2 === 0) {
        if (!$even) {
            echo "0";
            exit;
        }
    } else {
        if ($even) {
            echo $i;
            exit;
        }
    }
}
echo "0";

