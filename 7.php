<?php
$array = array();
$n=6;
for ($i = 0; $i < $n; $i++) {
    $array[]=mt_rand(-10,10);
} // создание рандомного массива
$k = 0;
for($i = 0; $i < $n + $k; $i++){
    if($array[$i] < 0){
//        $k++;
//        for($j = $n + $k - 1; $j > $i; $j--){
//            $array[$j] = $array[$j-1];
//        }
        $array[$i+1] = 0;
    }
}
print_r($array);