<?php
/** Реализуйте функцию checkIfBalanced, которая проверяет балансировку круглых скобок в арифметических выражениях.
 *
 * @param $string
 *
 * @return bool
 */
function checkIfBalanced($string)
{
    $numRightBracket = 0;
    $numLeftBracket = 0;
    $string = str_split($string);
    foreach ($string as $keyValue) {
        if ($keyValue === ')') {
            $numRightBracket++;
        } elseif ($keyValue === '(') {
            $numLeftBracket++;
        }
    }
    return ($numRightBracket === $numLeftBracket);
}
