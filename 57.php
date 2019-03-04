<?php

/** Реализуйте функцию cd, принимающую на вход два параметра: текущую директорию и путь для перехода.
 * Функция должна вернуть директорию, в которую необходимо перейти.
 * Правила перехода
 * Если путь для перехода начинается с /, то он же и является конечным путем (так как абсолютный путь).
 * .. - на уровень выше
 * . - та же директория
 *
 * @param $currentPath
 *                    текущая директория
 * @param $changePath
 *                    путь для перехода
 *
 * @return string
 *               директория, в которую необходимо перейти
 */

function cd($currentPath, $changePath)
{
    $relative = ($changePath[0] !== '/');
    if ($relative) {
        $changePath = $currentPath . '/' . $changePath;
    }
    $directories = explode('/', $changePath);
    $processedDirectories = [];
    /**if ($directories[0] === '..') {
     * $currentPath = explode('/', $currentPath);
     * array_shift($currentPath); //removing an '' element from the beginning
     * array_pop($currentPath);
     * $processedDirectories = $currentPath;
     * } elseif ($relative) {
     * $processedDirectories[] = $currentPath;
     * }*/


    foreach ($directories as $key => $directory) {
        //$nextDirectoryReturn = (array_key_exists($key + 1, $directories) && ($directories[$key + 1] === '..'));
        if ($directory === '..') {
            array_pop($processedDirectories);
        } elseif (($directory !== '.') && ($directory !== '')) {
            $processedDirectories[] = $directory;
        }
    }
    $newPath = implode('/', $processedDirectories);
    $newPath = '/' . $newPath;
    return $newPath;
}
