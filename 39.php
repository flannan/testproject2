<?php

/**Реализуйте функцию getManWithLessFriends, которая принимает список пользователей и возвращает пользователя, у
 * которого меньше всего друзей.
 *
 * Примечания
 * Если список пользователей пустой, то возвращается null
 * Если в списке есть более одного пользователя с минимальным количеством друзей,
 * то возвращается последний из таких пользователей
 *
 * @param array $users
 *
 * @return mixed
 */

function getManWithLessFriends(array $users)
{
    $numberOfFriends = [];
    foreach ($users as $key => $user) {
        $numberOfFriends[$key] = $user['friends'];
    }
    $key=array_keys($users);
    $key=$key[0];
    $keyLeastFriends = $key;
    $numberLeastFriends = $numberOfFriends[$key];
    foreach ($numberOfFriends as $key => $number) {
        if ($number <= $numberLeastFriends) {
            $keyLeastFriends = $key;
            $numberLeastFriends = $numberOfFriends[$key];
        }
    }

    return $users[$keyLeastFriends];
}
