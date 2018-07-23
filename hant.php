<?php

echo get_result();

function get_result() {
    $result = "<div class=\"alert alert-info\">";
    $score = get_score();
    $percent = get_percent($score);

    if ($score == 1) {
        $result .= "<p><strong>1 балл.</strong> При выявлении аневризмы возможно проведение незамедлительного оперативного лечения.</p>";
    } else if ($score == 2) {
        $result .= "<p><strong>2 балла</strong>. При выявлении аневризмы возможно проведение незамедлительного оперативного лечения.</p>";
    } else if ($score == 3 || $score == 4) {
        $result .= "<p><strong>{$score} балла.</strong> При выявлении аневризмы проводится консервативное лечение до достижения 2-х или 1-го балла по шкале.</p>";
    } else if ($score == 5 || $score == 6) {
        $result .= "<p><strong>{$score} баллов.</strong> При выявлении аневризмы проводится консервативное лечение до достижения 2-х или 1-го балла по шкале.</p>";
    }

    $result .= "<p>Риск хирургической летальности - {$percent}%</p>";
    $result .= "</div>";
    return $result;
}

function get_score() {
    $score = 0;
    foreach ($_GET as $key => $value) {
        $score += $_GET[$key];
    }
    return $score;
}

function get_percent($score) {
    if ($score == 1) {
        return 30;
    } else if ($score == 2) {
        return 40;
    } else if ($score == 3) {
        return 50;
    } else if ($score == 4) {
        return 80;
    } else {
        return 90;
    }
}