<?php
/**
 * Реализуйте функцию swap, которая меняет местами переданные аргументы по ссылке.
 * Использует дополнительную переменную.
 *
 * @param $variable1
 * @param $variable2
 *
 *
 * @return null
 */
function swap(
    &$variable1,
    &$variable2
) {
    $temporaryVariable = $variable1;
    $variable1 = $variable2;
    $variable2 = $temporaryVariable;
    return null;
}
