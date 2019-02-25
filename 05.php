<?php
/** Написать функцию, решающую квадратичное уравнение через дискриминант
 *  уравнение имеет вид $alpha * x^2 + $beta * x + $gamma = 0
 *  программа выводит значения x, являющиеся решениями уравнения.
 *  Это скаляр, если одно решение, массив если два решения, и null, если решений нет.
 *
 * @param $alpha
 * @param $beta
 * @param $gamma
 *
 * @return array|float|int|null
 */

function quadraticEquation(
    $alpha,
    $beta,
    $gamma
) {
    $discriminant = $beta * $beta - 4 * $alpha * $gamma;
    if ($discriminant === 0) {
        $answer = -$beta * $beta / 4 / $alpha;
    } elseif ($discriminant > 0) {
        $answer = [
            1 => -$beta * $beta + sqrt($discriminant) / 4 / $alpha,
            2 => -$beta * $beta - sqrt($discriminant) / 4 / $alpha
        ];
    } else {
        $answer = null;
    }
    return $answer;
}

/*$ans=quadraticEquation(1, 2, -1);
print_r($ans);
*/
