<?php

/** Реализуйте функцию rrmdir, удаляющую директорию рекурсивно, то есть вместе со всем своим содержимым.
 *
 * Подсказка
 * Одна из возможных реализаций может использовать итераторы.
 * Воспользуйтесь функцией scandir вместо функции glob.
 *
 * @param $path
 *
 * @return bool
 */

function rrmdir($path)
{
    $files = scandir($path, SCANDIR_SORT_NONE);
    foreach ($files as $filename) {
        if (($filename !== '.') && ($filename !== '..')) {
            $subpath = $path . '/' . $filename;
            if (is_dir($subpath)) {
                rrmdir($subpath);
            } else {
                unlink($subpath);
            }
        }
    }
    rmdir($path);
    return !is_dir($path);
}

/** Generates a sample directory to be safely deleted later
 *
 * @param $path
 * Path where the directory will be generated
 *
 * @return bool
 */
function makeSampleDirectory($path)
{
    $folder = $path . '/sample/level1/level2/level3';
    $success = !(!is_dir($folder) && !mkdir($folder, 0777, true) && !is_dir($folder));
    if ($success) {
        /** @noinspection SpellCheckingInspection */
        $pathSampleFile = 'lorem_ipsum.txt';
        copy($pathSampleFile, $path . '/sample/1.txt');
        copy($pathSampleFile, $path . '/sample/level1/2.txt');
        copy($pathSampleFile, $path . '/sample/level1/3.txt');
        copy($pathSampleFile, $path . '/sample/level1/4.txt');
        copy($pathSampleFile, $path . '/sample/level1/5.txt');
        copy($pathSampleFile, $path . '/sample/level1/level2/6.txt');
        copy($pathSampleFile, $path . '/sample/level1/level2/level3/7.txt');
        copy($pathSampleFile, $path . '/sample/level1/level2/level3/8.txt');

        $folder = $path . '/sample/level1/level2Alternate/level3';
        $success = !(!is_dir($folder) && !mkdir($folder, 0777, true) && !is_dir($folder));
        if ($success) {
            copy($pathSampleFile, $path . '/sample/level1/level2Alternate/9.txt');
            copy($pathSampleFile, $path . '/sample/level1/level2Alternate/level3/10.txt');
            copy($pathSampleFile, $path . '/sample/level1/level2Alternate/level3/11.txt');
        }
    }

    return $success;
}
