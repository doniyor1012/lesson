<?php
//Sanani bildiruvchi ikkita butun son berilgan D (kun) va M (oy).
// (Kabisa bo'lmagan yil sanasi kiritiladi). Berilgan sanani ifodalovchi programma tuzilsin
//. Kabisa yilida 366 kun, kabisa bo’lmagan yilda 365 kun bor bo’ladi.

$day = 30; // Example day
$month = 3; // Example month

$monthName = '';

switch ($month) {
    case 1:
        $monthName = 'January';
        break;
    case 2:
        $monthName = 'February';
        break;
    case 3:
        $monthName = 'March';
        break;
    case 4:
        $monthName = 'April';
        break;
    case 5:
        $monthName = 'May';
        break;
    case 6:
        $monthName = 'June';
        break;
    case 7:
        $monthName = 'July';
        break;
    case 8:
        $monthName = 'August';
        break;
    case 9:
        $monthName = 'September';
        break;
    case 10:
        $monthName = 'October';
        break;
    case 11:
        $monthName = 'November';
        break;
    case 12:
        $monthName = 'December';
        break;
    default:
        $monthName = 'xato';
        break;
}echo "bugun".' '. $monthName.' '. $day;







