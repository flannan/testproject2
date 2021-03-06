<?php

/** Реализуйте набор функций, для работы со словарём, построенным на хеш-таблице.
 * Для простоты, наша реализация не поддерживает разрешение коллизий.
 *
 * make() — создаёт новый словарь set($map, $key, $value) — устанавливает в словарь значение по ключу.
 * Работает и для создания и для изменения.
 * Функция возвращает true, если удалось установить значение, и false — в обратной ситуации.
 * Такое возможно при возникновении коллизий.
 * get($map, $key, $default = null) — читает значение по ключу.
 * Функции set и get принимают первым параметром словарь и мутируют его. То есть передача идёт по ссылке.
 *
 * Для полноценного погружения в тему,
 * считаем, что массив в PHP может использоваться только как индексированный массив.
 *
 * Подсказки crc32 — хеш-функция Индекс по которому будет храниться
 * значение во внутреннем массиве вычисляется так:
 * crc32($key) % 1000.
 * То есть к ключу применяется хеш-функция и берется остаток от деления на тысячу.
 * Это нужно для ограничения размера массива в разумных рамках.
 */

function make()
{
    return [];
}

/** set($map, $key, $value) — устанавливает в словарь значение по ключу.
 * Функции set и get принимают первым параметром словарь и мутируют его. То есть передача идёт по ссылке.
 *
 * @param $map
 * @param $key
 * @param $value
 *
 * @return bool
 */
function set(&$map, $key, $value)
{
    $answer = true;
    try {
        $map[crc32($key) % 1000] = $value;
    } catch (Exception $exception) {
        $answer = false;
        echo 'Caught exception: ',  $exception->getMessage(), "\n";
    } finally {
        return $answer;
    }
}

/**
 * get($map, $key, $default = null) — читает значение по ключу.
 *
 * @param      $map
 * @param      $key
 * @param null $default
 *
 * @return mixed|null
 */
function get(&$map, $key, $default = null)
{
    if (array_key_exists(crc32($key) % 1000, $map)) {
        $value = $map[crc32($key) % 1000];
    } else {
        $value = $default;
    }
    return $value;
}
