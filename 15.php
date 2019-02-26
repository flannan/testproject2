<?php

/** Реализуйте функцию makeCensored, которая заменяет каждое вхождение указанных слов в предложении
 * на последовательность $#%! и возвращает полученную строку.
 *
 * Аргументы: Текст Набор стоп слов
 * Словом считается любая непрерывная последовательность символов, включая любые спецсимволы (без пробелов).
 *
 * @param $sentence
 * @param $badWords
 *
 * @return string
 */

function makeCensored($sentence, array $badWords)
{
    $censor = '$#%!';
    $words = explode(' ', $sentence);
    foreach ($words as &$currentWord) {
        foreach ($badWords as $currentBadWord) {
            if ($currentWord === $currentBadWord) {
                $currentWord = $censor;
            }
        }
    }
    unset($currentWord);
    $sentence = implode(' ', $words);
    return $sentence;
}
