<?php

/** Реализуйте функцию getFreeDomainsCount, которая принимает на вход список емейлов, а возвращает количество емейлов,
 * расположенных на каждом бесплатном домене. Список бесплатных доменов хранится в константе FREE_EMAIL_DOMAINS.
 *
 * @param $emails
 *
 * @return array
 */

function getFreeDomainsCount(array $emails)
{
    define('FREE_EMAIL_DOMAINS', [
        'gmail.com',
        'yandex.ru',
        'hotmail.com'
    ]);
    //print_r(FREE_EMAIL_DOMAINS);
    $freeDomainsCount = [];
    foreach ($emails as $mail) {
        $mailArray = explode('@', $mail);
        if (in_array($mailArray[1], FREE_EMAIL_DOMAINS, true)) {
            if (array_key_exists($mailArray[1], $freeDomainsCount)) {
                $freeDomainsCount[$mailArray[1]]++;
            } else {
                $freeDomainsCount[$mailArray[1]] = 1;
            }
        }
    }
    return $freeDomainsCount;
}
