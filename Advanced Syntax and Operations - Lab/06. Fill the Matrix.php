<?php
$pattern = explode(", ", readline());
$matrix = [];



if($pattern[1] === "A")
{
    for ($row = 0; $row < $pattern[0]; $row++)
    {
        $counter = 1 + $row;
        $arr = [$counter];
        for ($col = 1; $col < $pattern[0]; $col++)
        {
            $counter += intval($pattern[0]);
            $arr[] = $counter;
        }
        $matrix[] = $arr;

        echo implode(" ", $arr) . PHP_EOL;
    }
} else if ($pattern[1] === "B") {



    for ($row = 0; $row < $pattern[0]; $row++) {
        $counter = 0;
        $arr = [];
        for ($col = 0; $col < $pattern[0]; $col++) {

            if($col % 2 != 0) {
                if($col == 1) {
                    $counter += intval($pattern[0]) * 2 - ($col + $row * 2) ;
                }
                else {
                    $counter = 0;
                    $counter -= $row + 1;
                    for($i = 1; $i < $col; $i++) {
                        $counter += $arr[$i];
                    }
                }
            } else {
                if($col == 0) {
                    $counter += $row + 1;
                } else {
                    if($row == 0) {
                        $counter += 1;
                    } else {
                        if($col < 4) {
                            $counter = $row;
                            for ($i = 0; $i < $col; $i++) {
                                $counter += $arr[$i];
                            }
                        }
                        else {
                            $counter = $arr[$col - 1] + $arr[$col - 2] - $arr[$col - 3];
                        }
                    }
                }
            }

            $arr[] = $counter;
        }
        $matrix[] = $arr;
        echo implode(" ", $arr) . PHP_EOL;

    }
}

