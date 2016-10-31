<?php
$arr = ['a','b','c','d','e','f','g'];
foreach ($arr as $key => $i) {
    if ($key == 0) {
        $c[$key] = $i;
        }
    elseif($key%2 == 0) {
        $b[$key - 1] = $i;
        }
    else {
        $c[$key + 1] = $i;
        }

    }
$arr = array_replace($b, $c);
ksort($arr);
print_r($arr);
