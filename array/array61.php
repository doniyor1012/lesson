<?php
//n ta butun sonlardan iborat a massiv berilgan. n ta elementdan tashkil
// topgan b massivni hosil qiling. b massiv elementlari quyidagicha hosil qilinadi:
// b[k] a massivning k - elementdan boshlab massiv oxirigacha bo’lgan elementlari yig’indisining o’rta arifmetigiga teng.

$a = [2, 7, 4, 9, 6, 3];
$n = count($a);
$b = [];
for ($k = 0; $k < $n; $k++) {
    $sum = array_sum(array_slice($a, $k)); // massivning k-elementdan boshlab oxirigacha bo'lgan elementlari yig'indisini hisoblaymiz
    $x = $sum / ($n - $k); // yig'indining o'rta arifmetigini hisoblaymiz
    $b[] = $x;
}
echo "b massivi elementlari: ";
foreach ($b as $element) {
    echo $element . " ";
}


