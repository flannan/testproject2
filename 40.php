<?php

/** Реализуйте функцию without, функция должна принимать любое число аргументов,
 * где первый аргумент массив, а все остальные - значения, которые нужно исключить из переданного массива.
 *
 * @param array $array
 * @param array $values
 *
 * @return array
 */

function without(array $array, ...$values)
{
    $newArray = [];
    foreach ($array as $key => $element) {
        if (!in_array($element, $values, true)) {
            $newArray[$key] = $element;
        }
    }

    return $newArray;
}
