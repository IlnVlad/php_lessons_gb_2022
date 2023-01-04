<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$check = function (int $element): string {
    if ($element % 2 == 0) {
        return 'чётное';
    } else {
        return 'нечётное';
    }
};

$func = array_map($check, $arr);

print_r($func);
