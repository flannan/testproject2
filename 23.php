<?php
/** Реализуйте функцию pick, которая извлекает из переданного массива все элементы
 * по указанным ключам и возвращает новый массив. Аргументы:
 *
 *
 * @param $array
 *              Исходный массив
 * @param $keys
 *             Массив ключей, по которым должны быть выбраны элементы(ключ и значение) из исходного массива,
 * и на основе выбранных данных сформирован новый массив
 *
 * @return array
 */

function pick(array $array, array $keys)
{
    $answer = [];
    foreach ($keys as $key) {
        if (array_key_exists($key, $array)) {
            $answer[$key] = $array[$key];
        }
    }
    return $answer;
}
