<?php

/** Реализуйте функцию sayPrimeOrNot, которая проверяет переданное число на простоту и печатает на экран yes или no.
 * Подсказки
 * Цель этой задачи — научиться отделять чистый код от кода с побочными эффектами.
 *
 * Для этого выделите процесс определения того, является ли число простым, в отдельную функцию,
 * возвращающую логическое значение.
 * Это функция, с помощью которой мы отделяем чистый код от кода,
 * интерпретирующего логическое значение (как 'yes' или 'no') и делающего побочный эффект (печать на экран).
 *
 * @param $number
 *
 * @return bool
 */

function primeOrNot($number)
{
    $isPrime = false;
    if ($number > 1) {
        if (($number === 2) || ($number === 3)) {
            $isPrime = true;
        } elseif (($number % 2 === 0) || ($number % 3 === 0)) {
            $isPrime = false;
        } else {
            $isPrime = true;
            $squareRoot = sqrt($number);
            for ($factor = 7; $factor < $squareRoot; $factor += 6) {
                if ($number % $factor === 0) {
                    $isPrime = false;
                }
            }
        }
    }
    return $isPrime;
}

/**
 * @param $number
 */
function sayPrimeOrNot($number)
{
    if (primeOrNot($number)) {
        echo 'yes' . "\n";
    } else {
        echo 'no' . "\n";
    }
}
