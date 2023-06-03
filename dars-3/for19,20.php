<?php
//n butun soni berilgan (n > 0). Birdan n gacha bo’lgan sonlar ko’paytmasini chiqaruvchi programma tuzilsin.
// n! = 1 * 2 * ... n Birdan n gacha bo’lgan sonlar ko’paytmasi n faktorial deyiladi
    $n=5;
    $res=0;
$s=1;
for ($i=1;$i<=$n;$i++){
$s*=$i;
$res+=$s;
}
echo $res;
//n butun soni berilgan (n > 0). Bir sikldan foydalangan holda quyidagi
// yig’indini hisoblovchi programma tuzilsin. 1! + 2! + 3! + ... +n!

