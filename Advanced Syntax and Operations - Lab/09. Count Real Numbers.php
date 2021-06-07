<?php
$arr = explode(" ", readline());

sort($arr);
$final = [];
foreach ($arr as $value) {
    if(key_exists("$value", $final))
    {
        $final[$value] += 1;
    }
    else {
        $final[$value] = 1;
    }
}

foreach ($final as $index => $num) {
    echo "$index -> $num" . PHP_EOL;
}