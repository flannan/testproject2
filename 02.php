<?php
/**
 * Реализуйте функцию isPalindrome, которая принимает на вход слово, определяет является ли оно палиндромом и
 * возвращает логическое значение.
 *
 * В отличии от предыдущей реализации, выполните эту более простым способом, через сравнение исходной строки с ее
 * перевернутой версией. Если они между собой равны, значит это палиндром.
 *
 * @param $word - слово для проверки
 *
 * @return bool - возвращает true, если $word - палиндром, false если нет.
 */
function isPalindrome(
    $word
) {
    return $word === strrev($word);
}

/*
var_dump(isPalindrome('radar')); // true
var_dump(isPalindrome('maam')); // true
var_dump(isPalindrome('a'));     // true
var_dump(isPalindrome('abs'));   // false
*/
