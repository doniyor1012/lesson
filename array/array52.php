<?php
//n ta elementdan tashkil topgan a massiv berilgan. b massivni
//hosil qiling. Agar a[i] < 5 bo’lsa, b[i] = 2 * a[i]; aks holda b[i] = a[i]/2;

// a massivini namuna sifatida yaratamiz
$a = [1,2,3,4,5,6,7,8];
// b massivini hosil qilish
$b = [];
foreach ($a as $element) {
    if ($element < 5) {
        $b[] = 2 * $element."\n";
    } else {
        $b[] = $element / 2;
    }
}
// b massivini chiqarish
echo "b massivi: ";
foreach ($b as $element) {
    echo $element . " ";
}


