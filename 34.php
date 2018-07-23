<?php
//Дано число.
//Разложите его на простые множители.
//Пример: 12 - это 2 * 2 * 3.

function div_custom($num) {
    $all_div = array();

    while(true) {
        $found = false;
        for ($i = 2; $i <= ceil(sqrt($num)) && !$found; $i++) {
            if ($num %  $i === 0) {
                $num = $num / $i;
                $all_div[] = $i;
                $found = true;
            }
        }

        if ($found) continue;
        if ($num !== 1) $all_div[] = $num;
        return $all_div;
    }
}

echo implode(" * ", div_custom(12));