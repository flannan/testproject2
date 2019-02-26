<?php

/** Реализуйте функцию calculateAverage, которая высчитывает среднее арифметическое элементов массива.
 * В случае пустого массива функция должна вернуть значение null
 *
 * @param array $array
 *
 * @return float|int|null
 */

function calculateAverage(
    array $array
) {
    if (empty($array)) {
        $answer = null;
    } else {
        $answer = array_sum($array);
    }
    return $answer;
}

/*
$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];

calculateAverage($temperatures); // => 38.5

$temperatures = [];

calculateAverage($temperatures); // => null
*/
