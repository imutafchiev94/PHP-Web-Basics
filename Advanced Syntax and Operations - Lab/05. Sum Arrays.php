<?php
$arr1 = explode(' ', readline());
$arr2 = explode(' ', readline());

$maxLength = max(count($arr1), count($arr2));

$result = [];

for ($i = 0; $i < $maxLength; $i++) {
    $result[] = intval($arr1[$i % count($arr1)]) + intval($arr2[$i % count($arr2)]);
}

echo implode(" ", $result);