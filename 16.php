<?php

/** Реализуйте функцию getSameCount, которая считает количество общих уникальных элементов для двух массивов. Аргументы:
 *
 *
 * @param $array1
 * Первый массив
 * @param $array2
 * Второй массив
 *
 * @return int
 */

function getSameCount($array1, $array2)
{
    return count(array_unique(array_intersect($array1, $array2)));
}
