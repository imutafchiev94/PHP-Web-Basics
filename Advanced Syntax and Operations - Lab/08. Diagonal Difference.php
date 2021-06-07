<?php
$n = intval(readline());
$matrix = [];

for ($rows = 0; $rows < $n; $rows++) {
    $row = explode(" ", readline());
    $matrix[] = $row;
}

$firstDiagonal = 0;
$secondDiagonal = 0;

for ($rows = 0; $rows < $n; $rows++) {
    $firstDiagonal += $matrix[$rows][$rows];
    $secondDiagonal += $matrix[$rows][$n - 1 - $rows];
}

echo abs($firstDiagonal - $secondDiagonal);