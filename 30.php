<?php

/** Реализуйте функцию average, которая возвращает среднее арифметическое всех переданных аргументов.
 * Если функции не передать ни одного аргумента, то она должна вернуть null.
 *
 * @param array $numbers
 *
 * @return float|int|null
 */

function average(...$numbers)
{
    if (count($numbers)===0) {
        $mean=null;
    } else {
        $mean=array_sum($numbers)/count($numbers);
    }
    return $mean;
}
