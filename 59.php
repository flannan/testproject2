<?php

/**  Реализуйте функцию grep, принимающую на вход два параметра:
 * подстроку для сопоставления и шаблон в формате glob, по которому будет происходить поиск.
 *
 *
 * Функция должна вернуть список всех строк файлов, в которых содержится подстрока.
 * Поиск должен производиться по всем файлам переданного шаблона.
 *
 * @param $substring
 *                  Подстрока для сопоставления
 * @param $pattern
 *                шаблон в формате glob
 *
 * @return array
 *              массив найденных строк.
 */

function grep($substring, $pattern)
{
    $answer = [];
    $fileList = glob($pattern);
    foreach ($fileList as $filename) {
        if (!is_dir($filename)) {
            $file = file($filename);
            foreach ($file as $string) {
                $inString = strpos($string, $substring);
                if ($inString !== false) {
                    //must be this strict, because answer might be a number that evaluates to "false"
                    $answer[] = $string;
                }
            }
        }
    }
    return $answer;
}
