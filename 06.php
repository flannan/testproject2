<?php
/** Реализуйте функцию get, которая извлекает из массива элемент по указанному индексу, если индекс существует,
 * либо возвращает значение по умолчанию. Функция принимает на вход три аргумента:
 *
 * Массив Индекс Значение по умолчанию (которое по умолчанию равно null)
 *
 * @param      $array
 * @param      $index
 * @param null $default
 *
 * @return mixed|null
 */

function get(
    $array,
    $index,
    $default = null
) {
    if (array_key_exists($index, $array)) {
        /* echo 'in array  '; */
        $answer = $array[$index];
    } else {
        $answer = $default;
    }
    /* echo ($answer); */
    return $answer;
}

/*$cities = ['moscow', 'london', 'berlin', 'porto'];

echo get($cities, 1, 'default city');
echo get($cities, 4);
echo get($cities, 10, 'paris');
*/
