<?php
/** Реализуйте функцию bubbleSort, которая сортирует массив используя пузырьковую сортировку.
 * Постарайтесь не подглядывать в текст теории и попробуйте воспроизвести алгоритм по памяти.
 *
 * @param array $array
 *
 * @return array
 */

function bubbleSort(array $array)
{
    $arrayLength = count($array);
    $sorting = true;
    while ($sorting) {
        $sorting = false;
        for ($key = 0; $key < $arrayLength - 1; $key++) {
            if (($key < $arrayLength - 1) && ($array[$key + 1] < $array[$key])) {
                $temp = $array[$key];
                $array[$key] = $array[$key + 1];
                $array[$key + 1] = $temp;
                $sorting = true;
            }
        }
    }
    return $array;
}
