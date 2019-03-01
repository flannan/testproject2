<?php

/** Реализуйте функцию getMensCountByYear, которая принимает на вход список пользователей и возвращает массив,
 * в котором ключ это год рождения, а значение это количество мужчин, родившихся в этот год.
 *
 * Подсказки
 * Для преобразования даты в Unix Timestamp используйте strtotime.
 * Для извлечения года из даты используйте функцию date с шаблоном Y.
 *
 * @param array $users
 *
 * @return array
 */

function getMensCountByYear(array $users)
{
    $menCountByYear = [];
    foreach ($users as $user) {
        $year = (string) date('Y', strtotime($user['birthday']));

        if (array_key_exists($year, $menCountByYear)) {
            $menCountByYear[$year]++;
        } else {
            $menCountByYear[$year] = 1;
        }
    }
    return $menCountByYear;
}
