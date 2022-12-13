<?php
start:
echo "В каком году произошло крещение Руси?\nВарианты: 810, 990, 740\n";
$ans = (int)readline("Введите ответ целым числом: ");
switch ($ans) {
    case 810:
        echo "Ваш ответ неверный!";
        break;
    case 990:
        echo "Поздравляем! Ваш ответ верный!";
        break;
    case 740:
        echo "Ваш ответ неверный!";
        break;
    default:
        goto start;
}
