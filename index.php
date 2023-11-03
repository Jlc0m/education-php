<?php

$input = 'GGhh';
$newStr = array_count_values(str_split(strtolower($input)));

foreach ($newStr as $value => $key) {
    switch ($value) {
        case $value < 2:
            echo "$input -> 0 # no characters repeats more than once";
            break;
        case $value == 2 || $value > 2:
            echo "# 'a' and 'b'";
            break;
    }
}