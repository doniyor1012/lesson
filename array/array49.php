<?php
// n ta elementdan tashkil topgan massiv berilgan. Agar massiv 1 dan n gacha
// bo’lgan sonlarning o’rin almashtirilishidan hosil bo’lgan bo’lsa, nol chiqarilsin.
// Aks holda birinchi uchragan nojoiz kiritilgan element indeksini chiqaruvchi programma tuzilsin.


// Massivni namuna sifatida yaratamiz
$elements = [1,2, 3, 4, 5, 6];
$n = count($elements);

for ($i = 0; $i < $n; $i++) {
    // Agar element o'rin almashtirilgan bo'lsa
    if ($elements[$i] != $i + 1) {
        echo "Birinchi uchragan nojoiz elementning indeksi: $i";
        break;
    }
}
if ($i == $n) {
    echo 0;
}


