<?php

$arr = [95, 39, 41, 54, 24, 53, 46, 76, 62, 42, 24, 88, 19, 3, 100];

$dataSetUp = function (array $inPut): array {
    return [
        'min' => min($inPut),
        'max' => max($inPut),
        'average' => array_sum($inPut) / count($inPut),
    ];
};

print_r($dataSetUp($arr));
