<?php

/** Реализуйте анонимную функцию, которая принимает на вход строку
 * и возвращает ее последний символ (или null если строка пустая).
 * Запишите созданную функцию в переменную $last.
 *
 * @param $string
 *
 * @return mixed
 */

$last = function ($string) {
    return $string[strlen($string) - 1];
};

echo $last('') . "\n"; // => null
echo $last('pow') . "\n"; // => w
echo $last('kids') . "\n"; // => s
