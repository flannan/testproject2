<?php

/**
 *Сериализация — процесс перевода какой-либо структуры данных в последовательность битов.
 * Обратной к операции сериализации является операция десериализации (структуризации) —
 * восстановление начального состояния структуры данных из битовой последовательности.
 *
 * Функция serialize в php генерирует пригодное для хранения представление переменной.
 * Это полезно для хранения или передачи значений PHP между скриптами без потери их типа и структуры.
 * Для превращения сериализованной строки обратно в PHP-значение существует функция unserialize.
 *
 * src/App/Serializer.php
 * Реализуйте функцию dump, которая принимает на вход имя файла и структуру данных.
 * После чего она сериализует эту структуру и записывает в файл.
 *
 * Реализуйте функцию load, которая принимает на вход имя файла.
 * После этого она читает содержимое файла и проводит десериализацию.
 *
 * @param $fileName
 * @param $data
 *
 * @return bool|int
 */

function dump($fileName, $data)
{
    $file = fopen($fileName, 'wb', false);
    $success = fwrite($file, serialize($data));
    fclose($file);
    if ($success !== false) {
        $success = true;
    }
    return $success;
}

/**
 * @param $fileName
 *
 * @return mixed
 */
function load($fileName)
{
    $rawData = file_get_contents($fileName);
    return unserialize($rawData, ['allowed_classes' => false]);
}
