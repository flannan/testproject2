<?php

/** Реализуйте функцию wordsCount, которая считает количество одинаковых слов в предложении.
 * Результатом функции является ассоциативный массив, в ключах которого слова из исходного текста, а значения это
 * количество повторений.
 *
 * Подсказки
 * Разбиение строки по разделителю: explode.
 * Для проверки строки на "пустоту" можно использовать функцию empty.
 *
 * @param $sentence
 *
 * @return array
 */

function wordsCount($sentence)
{
    $sentence = strtolower($sentence);
    $dictionary = [];
    $sentence = explode(' ', $sentence);
    foreach ($sentence as $word) {
        if (!empty($word)) {
            if (array_key_exists($word, $dictionary)) {
                $dictionary[$word]++;
            } else {
                $dictionary[$word] = 1;
            }
        }
    }
    return $dictionary;
}
