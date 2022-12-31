<?php

$whishes = ['счастья', 'здоровья', 'благополучия', 'воображения', 'терпения'];
$epithets = ['бесконечного', 'постоянного', 'невероятного', 'космического'];
$congratulation = [];

$name = readline("Назовите Ваше имя... ");
$name - ucfirst($name); //первая буква заглавная.
$numbers = 3;

for ($i = 0; $i < $numbers; $i++) {
    $randWishes = array_rand($whishes);
    $randEpithets = array_rand($epithets);
    $randomCongratulation[] = $epithets[$randEpithets] . ' ' . $whishes[$randWishes];
    unset($whishes[$randWishes]);
    unset($epithets[$randEpithets]);
}

$last = ' и ' . array_pop($randomCongratulation);

$stringCongratulation = implode(",", $randomCongratulation) . $last;

echo "$name, от всего сердца поздравляю тебя с Днём рождения, желаю $stringCongratulation";
