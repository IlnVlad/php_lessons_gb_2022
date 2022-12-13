<?php

$totalTime = 0;
$name = readline("Как Вас зовут? ");
do {
    $count = (int)readline("Сколько дел у Вас запланировано сегодня? Введите целое число > 0: ");
} while (!$count & $count > 0);
for ($i = 0; $i < $count; ++$i) {
    ${"task$i"} = readline("Какая задача стоит перед Вами? ");
    ${"time$i"} = readline("Сколько времени займёт задача? ");
    $totalTime = $totalTime + ${"time$i"};
}
echo "{$name}, у Вас запланированно $i приоритетных задач на сегодня:" . PHP_EOL;
for ($j = 0; $j < $i; ++$j) {
    echo "-" . ${"task$j"} . " (" . ${"time$j"} . " ч)" . PHP_EOL;
}
