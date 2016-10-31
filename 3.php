<?php
function one($arr, $n) {
    shuffle($arr);
    return array_splice($arr, 0, $n);
}
$array = [1,2,3,4,5,6,7,8,9];
var_dump(one($array, 5));
