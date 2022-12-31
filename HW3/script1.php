<?php

$arr1 = range(1, 10);
$arr2 = range(1, 10);
$mult = [];

foreach ($arr1 as $key => $value) {
    $mult[] = $arr1[$key] * $arr2[$key];
}

print_r($mult);
