<?php

$arr = readline();

$final = [];
for ($i = 0; $i < strlen($arr); $i++) {
    if (key_exists(strtolower($arr[$i]), $final)) {
        $final[$arr[$i]] += 1;
    } else {
        $final[$arr[$i]] = 1;
    }
}

foreach ($final as $index => $num) {
    echo "$index -> $num" . PHP_EOL;
}