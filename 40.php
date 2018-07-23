<?php
//Сделайте функцию, которая принимает дату в формате 2014-12-31, а возвращает знак зодиака в этот день.

function zodiac($date) {
    $year = strtok($date, "-");
    $month = strtok("-");
    $day = strtok("-");

    if (!is_numeric($day) || $day < 1)
        return "Неверно задан день.";

    switch ($month) {
        case "1":
            if ($day <= 20) return "Козерог";
            elseif ($day <= 31) return "Водолей";
            else return "В январе 31 день.";
        case "2":
            if ($day <= 19) return "Водолей";
            elseif ($day <= 29 && ($year%4 === 0 && $year%100 !== 0 || $year%400 === 0 ) || $day <= 28) return "Рыбы";
            else return "В феврале не более 29 дней, но только если год весокосный";
        case "3":
            if ($day <= 20) return "Рыбы";
            elseif ($day <= 31) return "Овен";
            else return "В иарте только 31 день";
        case "4":
            if ($day <= 20) return "Овен";
            elseif ($day <= 30) return "Телец";
            else return "В апреле только 30 дней";
        case "5":
            if ($day <= 21) return "Телец";
            elseif ($day <= 31) return "Близнецы";
            else return "В мае только 31 день";
        case "6":
            if ($day <= 21) return "Близнецы";
            elseif ($day <= 30) return "Рак";
            else return "В июне только 30 дней";
        case "7":
            if ($day <= 22) return "Рак";
            elseif ($day <= 31) return "Лев";
            else return "В июле только 31 день";
        case "8":
            if ($day <= 22) return "Лев";
            elseif ($day <= 31) return "Дева";
            else return "В августе только 31 день";
        case "9":
            if ($day <= 23) return "Дева";
            elseif ($day <= 30) return "Весы";
            else return "В сентябре только 30 дней";
        case "10":
            if ($day <= 23) return "Весы";
            elseif ($day <= 31) return "Скорпион";
            else return "В октябре только 31 день";
        case "11":
            if ($day <= 22) return "Скорпион";
            elseif ($day <= 30) return "Стрелец";
            else return "В ноябре только 30 дней";
        case "12":
            if ($day <= 21) return "Стрелец";
            elseif ($day <= 31) return "Козерог";
            else return "В декабре только 31 день";
        default:
            return "Неверно задан месяц.";
    }
}

echo zodiac("2100-05-08");