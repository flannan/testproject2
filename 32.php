<?php

/** Слаг - часть адреса сайта которая используется для идентификации ресурса в Человекопонятном виде.
 * Без слага /posts/3, со слагом /posts/my-super-post, где слаг это my-super-post.
 * Слаг обычно генерируется автоматически на основе названия ресурса, например статьи.
 *
 * Функция выполняющую трансляцию текста в слаг есть и в библиотеке Funct:
 *
 * Реализуйте функцию slugify. Преобразования которые она должна делать:
 *
 * Приводить к нижнему регистру все символы в строке
 * Удалять все пробелы
 * Соединять слова с помощью дефисов
 *
 * @param $string
 *
 * @return array|string
 */

function slugify($string)
{
    $string = strtolower($string);
    $string = explode(' ', $string);
    $slug=[];
    foreach ($string as $word) {
        if (!empty($word)) {
            $slug[]=$word;
        }
    }
    $slug = implode('-', $slug);
    return $slug;
}
