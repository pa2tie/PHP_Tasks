<?php

function print_array_custom($arr) {
    echo $arr[0];
    for($i = 1; $i < count($arr); $i++) {
        echo ',', $arr[$i];
    }
}