<?php
/** Обращение к вложенным массивам выглядит просто, только когда мы уверены в наличии всех ключей, попадающихся по пути:
 * Если же наличие данных ключей в массиве не обязательно, тогда код резко усложняется.
 * Каждая попытка обратиться внутрь должна сопровождаться проверкой:
 *
 * Реализуйте функцию getIn, которая извлекает из массива (который может быть любой глубины вложенности)
 * значение по указанным ключам. Аргументы:
 * Исходный массив
 * Массив ключей, по которым ведется поиск значения
 * В случае, когда добраться до значения невозможно, возвращается null.
 *
 * @param $array
 * @param $keys
 *
 * @return mixed|null
 */

function getIn($array, $keys)
{
    $level = 0;
    $maxLevel = count($keys) - 1;
    if (is_array($array)) {
        $depthRemaining = true;
    } else {
        $depthRemaining = false;
        $array = null;
    }

    while ($depthRemaining) {
        if (is_array($array) && array_key_exists($keys[$level], $array)) {
            $array = $array[$keys[$level]];
            $level++;
            $depthRemaining = ($level <= $maxLevel);
        } else {
            $array = null;
            $depthRemaining = false;
        }
    }
    return $array;
}
