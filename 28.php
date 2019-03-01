<?php

/** Реализовать задачу из задания 27 в консольном варианте.
 * В качестве исходного текста использовать произведение Толстой Лев - Война и мир. Текст скачаете в интернете.
 */

require_once __DIR__ . '/27.php';

echo 'loading' . "\n";
/** @noinspection SpellCheckingInspection */
$warAndPeace = file_get_contents('voina-i-mir.txt');

echo 'pre-processing' . "\n";
$warAndPeace = str_replace([',', '.', '-','?','(',')','–'], '', $warAndPeace);

echo 'calculating' . "\n";
$wordCount = wordsCount($warAndPeace);

$numCommon = 20;
echo 'outputting ' . $numCommon . ' most common words' . "\n";
arsort($wordCount);
$output = array_slice($wordCount, 0, $numCommon, true);
/** @noinspection ForgottenDebugOutputInspection */
print_r($output);
