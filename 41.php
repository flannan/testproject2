<?php

/** Реализуйте функцию getDifference, которая принимает на вход два массива, а возвращает массив,
 * составленный из элементов первого, которых нет во втором.
 *
 * Эту задачу можно решить с помощью функции array_diff, но подразумевается что вы сделаете это без ее использования.
 *
 */

function getDifference(array $startArray, array $substractArray)
{
    $newArray = [];
    foreach ($startArray as $key => $element) {
        if (!in_array($element, $substractArray, true)) {
            $newArray[$key] = $element;
        }
    }
    return $newArray;
}
