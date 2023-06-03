<?php
//n butun soni va a haqiqiy soni berilgan (n > 0). Bir sikldan foydalanib quyidagi a ning 1 dan n gacha bo’lgan barcha darajalarini chiqaruvchi
// va yig'indini hisoblovchi programma tuzilsin. 1 - a + a2-a3 + ... (-1)n an Shart operatoridan foydalanilmasin.
$n=3;
$a=1.5;
$sum=1;
$res=1;
for ($i=1;$i<=$n;$i++){
    $res *= $a;
$sum+= (-1) ** $i * $res;
}echo "daraja:";

for ($i=0;$i<=$n;$i++){
    echo $a ** $i."\n";
}
echo "yigindi:".$sum;