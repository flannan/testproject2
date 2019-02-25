<?php
/**
 * Палиндром — число, слово или текст, одинаково читающееся в обоих направлениях. Например: "радар", "топот".
 * Реализуйте функцию isPalindrome, которая принимает на вход слово, определяет является ли оно палиндромом и
 * возвращает логическое значение. Для определения является ли слово палиндромом, достаточно сравнивать попарно символ
 * с обоих концов слова. Если они все равны, то это палиндром. Решите задачу без использования реверса строки.
 *
 * @param $word - слово для проверки
 *
 * @return bool - возвращает true, если $word - палиндром, false если нет.
 */
function isPalindrome(
    $word
) {
    $answer = true;
    $letter = 0;
    $wordLength = strlen($word);
    while ($answer && ($letter < ($wordLength / 2))) {
        if ($word[$letter] !== $word[$wordLength-$letter-1]) {
            //echo ($word[$letter] . '!='.$word[$wordLength-$letter-1]);
            //echo "\n";
            $answer = false;
        }
        ++$letter;
    }

    return $answer;
}

/*
var_dump(isPalindrome('radar')); // true
var_dump(isPalindrome('maam')); // true
var_dump(isPalindrome('a'));     // true
var_dump(isPalindrome('abs'));   // false
*/
