<?php

require_once __DIR__ . '/60.php';

$file = 'dump.txt';
$structure = [
    0 => 'array',
    1 => 234,
    'a' => [
        0 => 10,
        1 => 5
    ]
];
dump($file, $structure);
$data = load($file);

if ($structure === $data) {
    echo "success! \n";
}
