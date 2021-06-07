<?php
$arr = explode(" ", readline());
$isExist = false;

for ($i = 0; $i < count($arr); $i++) {
    for ($j = $i + 1; $j < count($arr); $j++) {
        $num = intval($arr[$i]) + intval($arr[$j]);
        if(in_array($num, $arr, false)){
            echo "$arr[$i] + $arr[$j] == $num" . PHP_EOL;
            $isExist = true;
        }
    }
}

if ($isExist === false)
{
    echo "No";
}