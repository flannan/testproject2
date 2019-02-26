<?php

/** Реализуйте функцию isContinuousSequence, которая проверяет, является ли переданная последовательность целых чисел -
 * возрастающей непрерывно (не имеющей пропусков чисел).
 * Например, последовательность [4, 5, 6, 7] - непрерывная, а [0, 1, 3] - нет.
 * Последовательность может начинаться с любого числа, главное условие - отсутствие пропусков чисел.
 *
 * @param $sequence
 *
 * @return bool
 */

function isContinuousSequence(
    array $sequence
) {
    $answer = true;
    foreach ($sequence as $key => $value) {
        if (($key > 0) && ($value - $sequence[$key - 1]) !== 1) {
            $answer = false;
        }
    }
    return $answer;
}

/*
isContinuousSequence([10, 11, 12, 13]);     // => true
isContinuousSequence([10, 11, 12, 14, 15]); // => false
isContinuousSequence([1, 2, 2, 3]);         // => false
isContinuousSequence([]);                   // => false
*/
