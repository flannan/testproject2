<?php

/**Реализуйте функцию getSameParity, которая принимает на вход массив чисел и возвращает новый, состоящий из элементов,
 * у которых такая же чётность, как и у первого элемента входного массива.
 * Подсказки Проверка чётности - остаток от деления: $item % 2 == 0 — чётное число
 * Если на вход функции передан пустой массив, то она должна вернуть пустой массив.
 * Проверить массив на пустоту можно с помощью функции empty
 *
 * @param $array
 *
 * @return array
 */

function getSameParity(array $array)
{
    if (empty($array)) {
        $newArray = $array;
    } else {
        $parity = $array[0] % 2;
        $newArray = [];
        foreach ($array as $value) {
            if ($value % 2 === $parity) {
                $newArray[] = $value;
            }
        }
    }
    return $newArray;
}
