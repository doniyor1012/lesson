<?php
//n ta elementdan tashkil topgan massiv berilgan. Massiv elementlari orasidan
// oxirgi lokal maksimum elementi indeksini chiqaruvchi programma tuzilsin.
// Lokal maksimum - o’ng va chap qo’shinisidan katta bo’lgan element.
    function LocalMaximumIndex($array)
{
    $n = count($array);
    if ($n < 3) {
        // Massiv kamida 3 elementga ega bo'lishi kerak
        return -1;
    }
    for ($i = 1; $i < $n - 1; $i++) {
        if ($array[$i] > $array[$i - 1] && $array[$i] > $array[$i + 1]) {
            // Agar $i indeksdagi element $i-1 va $i+1 indeksdagi elementlardan kichik bo'lsa
            // lokal minimum topilgan demak, uni indeksini qaytar
            return $i;
        }
    }
    // Agar lokal minimum topilmagan bo'lsa -1 qaytar
    return -1;
}
// Massivni sinab ko'rish
$array = [5, 3, 2, 8, 9, 4, 6];

$localMinIndex = LocalmaximumIndex($array);

if ($localMinIndex != -1) {
    echo "Birinchi uchragan lokal maximum elementi indeksi: " . $localMinIndex;
} else {
    echo "Lokal minimum topilmadi";
}
?>

