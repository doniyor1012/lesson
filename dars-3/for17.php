<?php
//n butun soni va a haqiqiy soni berilgan (n > 0). Bir sikldan foydalanib quyidagi a ning 1 dan
// n gacha bo’lgan barcha darajalarini chiqaruvchi va yig'indini hisoblovchi programma tuzilsin. 1 + a + a2 + a3 + ... an
$n=7;
$a=0;
for ($i=1;$i<=$n;$i++){
    $a+= pow($i,2);
    echo "daraja $i: a = $a"."\n";
}

