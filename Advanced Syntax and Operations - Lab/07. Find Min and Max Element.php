<?php
$input = explode(", ", readline());

$max = PHP_INT_MIN;
$min = PHP_INT_MAX;

$matrix = [];

for ($i = 0; $i < intval($input[0]); $i++) {
    $row = explode(", ", readline());
    $matrix[] = $row;
}

for($rows = 0; $rows < intval($input[0]); $rows++) {
    for ($cols = 0; $cols < intval($input[1]); $cols++) {
        if($matrix[$rows][$cols] >= $max) {
            $max = $matrix[$rows][$cols];
        }
        if ($matrix[$rows][$cols] <= $min) {
            $min = $matrix[$rows][$cols];
        }
    }
}

echo "Min: $min" . PHP_EOL;
echo "Max: $max" . PHP_EOL;