<?php

/** Реализуйте функцию getIntersectionForSortedArray, которая принимает на вход два отсортированных массива и
 * находит их пересечение. Задачу реализовать двумя способами - используя штатные функции, и перебором элементов
 * массивов
 *
 * Подсказки Не забудьте поставить проверку на размерность массивов.
 * Если хотя бы один из них пустой, то пересечений нет.
 *
 * @param array $array1
 * @param array $array2
 *
 * @return array
 */

function getIntersectionForSortedArray(array $array1, array $array2)
{
    return array_intersect($array1, $array2);
}

/** Эта версия делает перебор элементов массивов.
 *
 * @param array $array1
 * @param array $array2
 *
 * @return array
 */
function getIntersectionForSortedArraySelfMade(array $array1, array $array2)
{
    $key2 = 0;
    $intersection = [];
    foreach ($array1 as $value1) {
        while ($value1 >= $array2[$key2]) {
            if ($value1 === $array2[$key2]) {
                $intersection[]=$value1;
            }
            ++$key2;
        }
    }
    return $intersection;
}
