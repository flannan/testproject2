<?php
/** Обратите внимание на сходство json и ассоциативного массива. Оно не случайно.
 * Json является представлением ассоциативного массива в текстовом виде.
 * Composer во время каждого запуска считывает этот файл.
 *
 * Реализуйте функцию getComposerFileData, которая возвращает ассоциативный массив,
 * соответствующий json из файла composer.json в этом упражнении.
 */

function getComposerFileData()
{
    $jsonString = file_get_contents('composer.json');
    return json_decode($jsonString, true);
}
