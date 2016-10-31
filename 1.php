<?php
function getDay($day, $month, $year)
{
    $days = array("воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота");
    $day = (int)$day;
    $month = (int)$month;
    $a = (int)((14 - $month) / 12);
    $y = $year - $a;
    $m = $month + 12 * $a - 2;
    $d = (7000 + (int)($day+$y+ (int)($y/4) - (int)($y/100) + (int)($y/400) + (31*$m)/12))%7;
    return $days[$d];
}
$day = [22, 23, 24, 25, 26, 27, 28, 29];
$year = 1950;
foreach ($day as $i) {
    $c = getDay($i, 2, $year);
    if (($i == 22) && ($c == "воскресенье") && ($year%4 == 0)) {
        continue;
    }
    elseif ($c == "воскресенье"){
        echo "Масленица в $year году $i числа";
        break;
    }
}