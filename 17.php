<?php

/** Реализуйте функцию countUniqChars, которая получает на вход строку
 * и считает, сколько символов (уникальных символов) использовано в этой строке.
 * Например, в строке 'yy' всего один уникальный символ — y.
 * А в строке '111yya!' — четыре уникальных символа: 1, y, a и !.
 *
 * Задание необходимо выполнить без использования функции array_unique.
 *
 * Примечания Если передана пустая строка, то функция должна вернуть 0,
 * так как пустая строка вообще не содержит символов.
 *
 * @param $string
 *
 * @return int
 */

function countUniqChars($string)
{
    $knownChars = [];
    if ($string !== '') {
        $string = str_split($string);
        foreach ($string as $stringChar) {
            if (!in_array($stringChar, $knownChars, false)) {
                $knownChars[] = $stringChar;
            }
        }
    }
    return count($knownChars);
}
