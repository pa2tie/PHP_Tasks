<?php

echo get_result();

function get_result() {
    $result = "<div class=\"alert alert-info\">";
    $score = get_score();
    $risk = get_risk($score);

    if ($score == 1) {
        $result .= "<strong>1 балл</strong>";
    } else if ($score >= 2 && $score <= 4) {
        $result .= "<strong>{$score} балла</strong>";
    } else {
        $result .= "<strong>{$score} баллов</strong>";
    }

    $result .= "<p>{$risk} риск ТЭЛА</p>";
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

function get_risk($score) {
    $result = "";
    if ($score >= 0 && $score <= 3) {
        $result .= "Низкий";
    } else if ($score >= 4 && $score <= 10) {
        $result .= "Средний";
    } else {
        $result .= "Высокий";
    }

    return $result;
}