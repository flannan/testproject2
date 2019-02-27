<?php

/** Реализуйте функцию genDiff, которая возвращает ассоциативный массив, в котором каждому ключу из исходных массивов
 * соответствует одно из четырёх значений: added, deleted, changed или unchanged.
 * Аргументы:
 *
 * @param array $array1
 *                     Ассоциативный массив
 * @param array $array2
 *                     Ассоциативный массив
 *
 * @return array
 * Расшифровка:
 *
 * added — ключ отсутствовал в первом массиве, но был добавлен во второй
 * deleted — ключ был в первом массиве, но отсутствует во втором
 * changed — ключ присутствовал и в первом и во втором массиве, но значения отличаются
 * unchanged — ключ присутствовал и в первом и во втором массиве с одинаковыми значениями
 */

function genDiff(array $array1, array $array2)
{
    $comparison = $array1;
    foreach ($array1 as $key => $value) {
        if (array_key_exists($key, $array2)) {
            if ($value === $array2[$key]) {
                $comparison[$key]='unchanged';
            } else {
                $comparison[$key]='changed';
            }
        } else {
            $comparison[$key]='deleted';
        }
    }
    foreach ($array2 as $key => $value) {
        if (!array_key_exists($key, $array1)) {
            $comparison[$key]='added';
        }
    }
    return $comparison;
}
