<?php

do {
    $finger = (int)readline("Введите целое число  > 0): ") % 8;
} while (!$finger & $finger > 0);
switch ($finger) {
    case 1:
        echo "Большой";
        break;
    case ($finger == 2) || ($finger == 0):
        echo "Указательный";
        break;
    case ($finger == 3) || ($finger == 7):
        echo "Средний";
        break;
    case ($finger == 4) || ($finger == 6):
        echo "Безымянный";
        break;
    case 5:
        echo "Мизинец";
}
