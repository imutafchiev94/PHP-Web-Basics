<?php

$arr = explode(" ", readline());

$final = [];
foreach ($arr as $value) {
    if (key_exists($value, $final)) {
        $final[$value] += 1;
    } else {
        $final[$value] = 1;
    }
}

$result = [];

foreach ($final as $index => $num) {
    if($num % 2 != 0 )
    {
        if(!in_array(strtolower($index), $result))
        {
            $result[] = strtolower($index);
        }

    }
}

echo implode(" ", $result);