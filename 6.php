<?php
$i = 1;
while ($i < 10000) {
    if (($i%5 !== 5) && (substr_count ($i, "3"))) {
        echo $i . "<br>";
    }
    $i++;
}