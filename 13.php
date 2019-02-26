<?php

/**Имеется набор данных, описывающих изменение температуры воздуха в одном городе в течение нескольких суток. Данные
 * представлены массивом, в котором каждый элемент - это массив, содержащий список температур в течение одних суток.
 *
 * Допустим, у нас есть статистика температур (например, по состоянию на утро, день и вечер) за три дня. Для первого
 * дня значения температур составляют: -5°, 7°, 1°; для второго дня: 3°, 2°, 3°; и для третьего дня: -1°, -1°, 10° .
 * Массив, отражающий такую статистику, будет выглядеть так:
 *
 * $data = [
 * [-5, 7, 1],
 * [3, 2, 3],
 * [-1, -1, 10],
 * ]
 *
 * Реализуйте функцию getIndexOfWarmestDay, которая находит самый тёплый день (тот, в котором была зарегистрирована
 * максимальная температура) и возвращает индекс этого дня в исходном массиве.
 *
 * Если на вход поступил пустой массив, то функция должна вернуть null
 *
 * Подсказки Поиск максимального числа в массиве можно выполнить, используя функцию max
 *
 * @param $data
 *
 * @return int|string|null
 */

function getIndexOfWarmestDay(array $data)
{
    $dayWarmest = null;
    if (!empty($data)) {
        $temperatureWarmest = -500; //below absolute zero on both Celsius and Fahrenheit
        foreach ($data as $day => $temperatures) {
            //$temperature = array_sum($temperatures) / count ($temperatures); //average temperature
            $temperature = max($temperatures); //peak temperature
            if ($temperature > $temperatureWarmest) {
                $temperatureWarmest = $temperature;
                $dayWarmest = $day;
            }
        }
    }
    return $dayWarmest;
}
