<?php
$arr = explode(" ", readline());


foreach ($arr as $value) {
    $result = round(floatval($value), 0, PHP_ROUND_HALF_UP);

    echo "$value => $result" . PHP_EOL;
}