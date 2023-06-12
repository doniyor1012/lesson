<?php
//a, b, s butun sonlari berilgan. Jumlani rostlikka tekshiring
// a, b, c tomonli uchburchak teng yonli bo’ladi".


$a = 3;
$b = 4;
$s = 7;

if ($a + $b > $s && $b + $s > $a && $s + $a > $b) {
    echo "Uchburchak teng yonli bo'ladi";
} else {
    echo "Uchburchak teng yonli bo'lmasligi";
}

