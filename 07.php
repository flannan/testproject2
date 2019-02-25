<?php
/** Реализуйте функцию addPrefix, которая добавляет к каждому элементу массива переданный префикс и возвращает
 * получившийся массив. Функция предназначена для работы со строковыми элементами.
 * Аргументы:
 * Массив Префикс После префикса автоматически добавляется пробел.
 *
 * @param array $names
 * @param       $prefix
 *
 * @return array
 */
function addPrefix(
    array $names,
    $prefix
) {
    foreach ($names as &$name) {
        $name = $prefix . ' ' . $name;
    }
    return $names;
}

/*
 * $names = ['john', 'smith', 'karl'];

$newNames = addPrefix($names, 'Mr');
print_r($newNames);
*/
