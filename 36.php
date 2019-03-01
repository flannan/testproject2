<?php

/** Реализуйте функцию getGirlFriends, которая принимает на вход список пользователей и возвращает плоский список подруг
 * всех пользователей (без сохранения ключей). Друзья каждого пользователя хранятся в виде массива в ключе friends. Пол
 * доступен по ключу gender и может принимать значения male или female.
 *
 * @param $users
 * $users = [
 * ['name' => 'Tirion', 'friends' => [
 * ['name' => 'Mira', 'gender' => 'female'],
 * ['name' => 'Ramsey', 'gender' => 'male']
 * ]],
 * ['name' => 'Bronn', 'friends' => []],
 * ['name' => 'Sam', 'friends' => [
 * ['name' => 'Aria', 'gender' => 'female'],
 * ['name' => 'Keit', 'gender' => 'female']
 * ]],
 * ['name' => 'Rob', 'friends' => [
 * ['name' => 'Taywin', 'gender' => 'male']
 * ]],
 * ];
 *
 * @return array
 */

function getGirlFriends(array $users)
{
    $girlfriends = [];
    foreach ($users as $user) {
        $friends = $user['friends'];
        if (is_array($friends) && (!array_key_exists('gender', $friends))) {
            foreach ($friends as $friend) {
                if ($friend['gender'] === 'female') {
                    $girlfriends[] = $friend;
                }
            }
        } elseif (array_key_exists('gender', $friends)) {
            if ($friends['gender'] === 'female') {
                $girlfriends[] = $friends;
            }
        }
    }
    return $girlfriends;
}
