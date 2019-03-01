<?php
/** @noinspection ParameterDefaultValueIsNotNullInspection */

/** Реализуйте функцию takeOldest, которая принимает на вход список пользователей и возвращает самых взрослых.
 * Количество возвращаемых пользователей задается вторым параметром, который по-умолчанию равен единице.
 *
 * @param     $users
 *
 * $users = [
 * ['name' => 'Tirion', 'birthday' => '1988-11-19'],
 * ['name' => 'Sam', 'birthday' => '1999-11-22'],
 * ['name' => 'Rob', 'birthday' => '1975-01-11'],
 * ['name' => 'Sansa', 'birthday' => '2001-03-20'],
 * ['name' => 'Tisha', 'birthday' => '1992-02-27']
 * ];
 *
 * @param int $number
 *
 * @return mixed
 */

function takeOldest(array $users, $number = 1)
{
    foreach ($users as $key => $value) {
        $birthdays[$key] = $value['birthday'];
    }
    asort($birthdays);
    $birthdays = array_slice($birthdays, 0, $number);
    $keys = array_keys($birthdays);
    $oldestUsers = [];
    foreach ($keys as $key) {
        $oldestUsers[] = $users[$key];
    }

    return $oldestUsers;
}
