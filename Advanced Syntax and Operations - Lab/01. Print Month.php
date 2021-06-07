<?php
$months = ["January", "February", "March", "April", "May", "June",  "July", "August", "September", "October",
    "November", "December"];

$index = intval(readline());

if(key_exists($index - 1, $months)) {
    echo $months[$index - 1];
}
else {
    echo "Invalid Month!";
}