<?php
/** Реализуйте функцию reverse, которая переворачивает цифры в переданном числе:
 *
 * @param $number
 *
 * @return array|int|null
 */

function reverse($number)
{
    $reverseNumber = strrev($number);
    if (is_int($number)) {
        $reverseNumber = (int)$reverseNumber;
    } else {
        $reverseNumber = (float)$reverseNumber;
    }
    if ($number<0) {
        $reverseNumber = -$reverseNumber;
    }

    return $reverseNumber;
}

/*print_r(reverse(13));
echo "\n";
print_r(reverse(-123));
echo "\n";
*/
