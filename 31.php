<?php

/**  Реализуйте функцию union, которая находит объединение всех переданных массивов.
 * Функция принимает на вход от одного массива и больше.
 * Ключи исходных массивов не сохраняются (т.е. все значения итогового массива заново индексируются: 0, 1, 2, ...).
 *
 * @param array ...$arrays
 *
 * @return array
 */

function union(array ...$arrays)
{
    $unionArray = [];
    foreach ($arrays as $currentArray) {
        foreach ($currentArray as $value) {
            if (!in_array($value, $unionArray, true)) {
                $unionArray[] = $value;
            }
        }
    }
    return $unionArray;
}
