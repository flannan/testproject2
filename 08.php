<?php
/**
 * Реализуйте функцию swap, которая меняет местами два элемента относительно переданного индекса.
 * Например, если передан индекс 5, то функция меняет местами элементы, находящиеся по индексам 4 и 6.
 *
 * Параметры функции:
 *
 * Массив Индекс
 * Если хотя бы одного из индексов не существует, функция возвращает исходный массив.
 *
 * @param $array
 * @param $index
 *
 * @return mixed
 */
function swap(
    $array,
    $index
) {
    if (array_key_exists($index - 1, $array) &&
        array_key_exists($index, $array) &&
        array_key_exists($index + 1, $array)
    ) {
        $temporaryVariable = $array[$index - 1];
        $array[$index - 1] = $array[$index + 1];
        $array[$index + 1] = $temporaryVariable;
    }
    return $array;
}

/*
$names = ['john', 'smith', 'karl'];

$result = swap($names, 1);
print_r($result); // => ['karl', 'smith', 'john']

$result = swap($names, 2);
print_r($result); // => ['john', 'smith', 'karl']
*/
