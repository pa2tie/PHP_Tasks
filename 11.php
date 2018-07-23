<?php
//Найти максимальное значение в одноуровневом массиве.
//На входе array(2,5,3,5,6,7,8,9,25,24,18).
//В результате должно получится 25.

$arr = array(2,5,3,5,6,7,8,9,25,24,18);

function max_elem($arr) {
    asort($arr);
    return array_pop($arr);
}

echo max_elem($arr);