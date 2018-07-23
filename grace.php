<?php

if(is_valid()) {
    echo get_result();
}
else {
    echo "<div class=\"alert alert-danger\">Не все основные поля заполнены!</div>";
}

function is_valid() {
    foreach($_GET as $key => $value) {
        if ($_GET[$key] == "") return false;
    }
    return true;
}

function get_result() {
    $result = "<div class=\"alert alert-info\">";
    $score = get_score();

    if ($score == 1) {
        $result .= "<p><strong>1 балл</strong></p>";
    } else if ($score >= 2 && $score <= 4) {
        $result .= "<p><strong>{$score} балла</strong></p>";
    } else {
        $result .= "<p><strong>{$score} баллов</strong></p>";
    }

    $result .= "<p><strong>ОКС с подъемом ST:</strong><br>";
    $result .= "6-ти месячная летальность: ";

    if ($score < 100) {
        $result .= '<4.5%<br>';
        $result .= 'риск: низкий<br>';
    } elseif ($score <= 127) {
        $result .= '4.5 - 11%<br>';
        $result .= 'риск: средний<br>';
    } else {
        $result .= '>11%<br>';
        $result .= 'риск: высокий<br>';
    }

    $result .= "внутригоспитальная летальность: ";

    if ($score < 126) {
        $result .= '<2%<br>';
        $result .= 'риск: низкий<br>';
    } elseif ($score <= 154) {
        $result .= '2 - 5%<br>';
        $result .= 'риск: средний<br>';
    } else {
        $result .= '>5%<br>';
        $result .= 'риск: высокий<br>';
    }

    $result .= '</p>';
    $result .= "<p><strong>ОКС без подъема ST:</strong><br>";

    $result .= "6-ти месячная летальность: ";

    if ($score < 89) {
        $result .= '<3%<br>';
        $result .= 'риск: низкий<br>';
    } elseif ($score <= 118) {
        $result .= '3 - 8%<br>';
        $result .= 'риск: средний<br>';
    } else {
        $result .= '>8%<br>';
        $result .= 'риск: высокий<br>';
    }

    $result .= "внутригоспитальная летальность: ";

    if ($score < 109) {
        $result .= '<1%<br>';
        $result .= 'риск: низкий<br>';
    } elseif ($score <= 154) {
        $result .= '1 - 3%<br>';
        $result .= 'риск: средний<br>';
    } else {
        $result .= '>3%<br>';
        $result .= 'риск: высокий<br>';
    }

    $result .= '</p>';

    $result .= "</div>";

    return $result;
}

function get_score() {
    $score = 0;
    foreach ($_GET as $key => $value) {
        if($key == 'age') {
            if ($_GET[$key] < 30) {
                $score += 0;
            } else if ($_GET[$key] <= 39) {
                $score += 8;
            } else if ($_GET[$key] <= 49) {
                $score += 25;
            } else if ($_GET[$key] <= 59) {
                $score += 41;
            } else if ($_GET[$key] <= 69) {
                $score += 58;
            } else if ($_GET[$key] <= 79) {
                $score += 75;
            } else if ($_GET[$key] <= 89) {
                $score += 91;
            } else {
                $score += 100;
            }
        }

        if($key == 'chss') {
            if ($_GET[$key] < 50) {
                $score += 0;
            } else if ($_GET[$key] <= 69) {
                $score += 3;
            } else if ($_GET[$key] <= 89) {
                $score += 9;
            } else if ($_GET[$key] <= 109) {
                $score += 15;
            } else if ($_GET[$key] <= 149) {
                $score += 24;
            } else if ($_GET[$key] <= 199) {
                $score += 38;
            } else {
                $score += 46;
            }
        }

        if($key == 'systolic') {
            if ($_GET[$key] < 80) {
                $score += 58;
            } else if ($_GET[$key] <= 99) {
                $score += 53;
            } else if ($_GET[$key] <= 119) {
                $score += 43;
            } else if ($_GET[$key] <= 139) {
                $score += 34;
            } else if ($_GET[$key] <= 159) {
                $score += 24;
            } else if ($_GET[$key] <= 199) {
                $score += 10;
            } else {
                $score += 0;
            }
        }

        if ($key == 'creatinine') {
            if ($_GET[$key] < 35.36) {
                $score += 1;
            } else if ($_GET[$key] <= 70.71) {
                $score += 4;
            } else if ($_GET[$key] <= 106.07) {
                $score += 7;
            } elseif ($_GET[$key] <= 141.43) {
                $score += 10;
            } elseif ($_GET[$key] <= 176.7) {
                $score += 13;
            } elseif ($_GET[$key] <= 353) {
                $score += 21;
            } else {
                $score += 28;
            }
        }

        if ($key == 'heartStop') {
            $score += $_GET[$key];
        }

        if ($key == 'segmentSt') {
            $score += $_GET[$key];
        }

        if ($key == 'highEnzymes') {
            $score += $_GET[$key];
        }

        if ($key == 'failure') {
            $score += $_GET[$key];
        }
    }

    return $score;
}
