<?php

/**Реализуйте функцию findIndex, которая возвращает первый встретившийся индекс переданного элемента в случае,
 * если элемент присутствует в массиве, и -1 в случае, если он отсутствует.
 *
 * Параметры функции:
 *
 * Массив Элемент
 *
 * @param $array
 * @param $element
 *
 * @return int
 */

function findIndex($array, $element)
{
    $answer = -1;
    $index = 0;
    $length = count($array);
    while (($index < $length) && ($answer === -1)) {
        /** @noinspection TypeUnsafeComparisonInspection */
        if ($array[$index] == $element) {
            $answer=$index;
        }
        $index++;
    }
    return $answer;
}
