<?php /** @noinspection ForgottenDebugOutputInspection */

require_once __DIR__.'/31.php';

print_r(union([3])); // => [3]
print_r(union([3, 2], [2, 2, 1])); // => [3, 2, 1]
var_dump(union(['a', 3, false], [true, false, 3], [false, 5, 8])); // => ['a', 3, false, true, 5, 8]
